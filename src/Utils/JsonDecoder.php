<?php


namespace BaseLinkerNts\Utils;


use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class JsonDecoder
{
    private Serializer $serializer;

    /**
     * JsonDecoder constructor.
     */
    public function __construct()
    {
        $extractor = new PropertyInfoExtractor([], [new PhpDocExtractor(), new ReflectionExtractor()]);
        $converter = new CamelCaseToSnakeCaseNameConverter();
        $normalizers = [
            new DateTimeNormalizer(),
            new ArrayDenormalizer(),
            new ObjectNormalizer(null, $converter, null, $extractor),
        ];

        $this->serializer = new Serializer(
            $normalizers, [new JsonEncoder()]
        );
    }

    /**
     * @param string $json
     * @param string $classType
     * @return array|mixed|object
     * @throws NotEncodableValueException
     */
    public function decode(string $json, string $classType)
    {
        return $this->serializer->deserialize($json, $classType, 'json');
    }

    /**
     * @param $data
     * @return string
     */
    public function serialize($data): string
    {
        return $this->serializer->serialize($data, 'json');
    }
}