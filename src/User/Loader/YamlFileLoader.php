<?php


namespace BaseLinkerNts\User\Loader;


use InvalidArgumentException;
use Symfony\Component\Config\Loader\FileLoader;
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Parser as YamlParser;
use Symfony\Component\Yaml\Yaml;

class YamlFileLoader extends FileLoader
{
    private static array $availableKeys = [
        'users',
        'password',
        'roles',
        'active'
    ];
    /**
     * @var YamlParser|null
     */
    private ?YamlParser $yamlParser = null;

    /**
     * @param mixed $resource
     * @param string|null $type
     * @return array
     */
    public function load($resource, string $type = null): array
    {
        $path = $this->locator->locate($resource);

        if (!stream_is_local($path)) {
            throw new InvalidArgumentException(sprintf('This is not a local file "%s".', $path));
        }

        if (!file_exists($path)) {
            throw new InvalidArgumentException(sprintf('File "%s" not found.', $path));
        }

        if (null === $this->yamlParser) {
            $this->yamlParser = new YamlParser();
        }

        try {
            $parsedConfig = $this->yamlParser->parseFile($path, Yaml::PARSE_CONSTANT);
        } catch (ParseException $e) {
            throw new InvalidArgumentException(
                sprintf('The file "%s" does not contain valid YAML: ', $path) . $e->getMessage(), 0, $e
            );
        }

        // empty file
        if (null === $parsedConfig) {
            return [];
        }

        // not an array
        if (!is_array($parsedConfig)) {
            throw new InvalidArgumentException(sprintf('The file "%s" must contain a YAML array.', $path));
        }

        $users = [];

        foreach ($parsedConfig as $name => $config) {
            $this->validate($config, $name, $path);
            $users += $config;
        }

        return $users;
    }

    /**
     * @param mixed $resource
     * @param string|null $type
     * @return bool
     */
    public function supports($resource, string $type = null): bool
    {
        return is_string($resource)
            && in_array(
                pathinfo($resource, \PATHINFO_EXTENSION),
                ['yml', 'yaml'],
                true
            )
            && (!$type || 'yaml' === $type);
    }

    /**
     * @param $config
     * @param string $name
     * @param string $path
     * @throws InvalidArgumentException
     */
    protected function validate($config, string $name, string $path): void
    {
        if (!is_array($config)) {
            throw new InvalidArgumentException(
                sprintf('The definition of "%s" in "%s" must be a YAML array.', $name, $path)
            );
        }

        if ($name === "users") {
            foreach ($config as $key => $conf) {
                if ($extraKeys = array_diff(array_keys($conf), self::$availableKeys)) {
                    throw new InvalidArgumentException(
                        sprintf(
                            'The routing file "%s" contains unsupported keys for "%s": "%s". Expected one of: "%s".',
                            $path,
                            $name . " " . $key,
                            implode('", "', $extraKeys),
                            implode('", "', self::$availableKeys)
                        )
                    );
                }
            }
        }
    }

}