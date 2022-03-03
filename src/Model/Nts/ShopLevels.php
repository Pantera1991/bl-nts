<?php

namespace BaseLinkerNts\Model\Nts;

class ShopLevels
{

    /**
     * @var string|null $matno
     */
    protected ?string $matno;

    /**
     * @var string|null $matname
     */
    protected ?string $matname;

    /**
     * @var string|null $matgroup
     */
    protected ?string $matgroup;

    /**
     * @var string|null $shop_no
     */
    protected ?string $shop_no;

    /**
     * @param string $matno
     * @param string $matname
     * @param string $matgroup
     * @param string $shop_no
     */
    public function __construct(string $matno, string $matname, string $matgroup, string $shop_no)
    {
      $this->matno = $matno;
      $this->matname = $matname;
      $this->matgroup = $matgroup;
      $this->shop_no = $shop_no;
    }

    /**
     * @return string
     */
    public function getMatno(): ?string
    {
      return $this->matno;
    }

    /**
     * @param string $matno
     * @return ShopLevels
     */
    public function setMatno(string $matno): ShopLevels
    {
      $this->matno = $matno;
      return $this;
    }

    /**
     * @return string
     */
    public function getMatname(): ?string
    {
      return $this->matname;
    }

    /**
     * @param string $matname
     * @return ShopLevels
     */
    public function setMatname(string $matname): ShopLevels
    {
      $this->matname = $matname;
      return $this;
    }

    /**
     * @return string
     */
    public function getMatgroup(): ?string
    {
      return $this->matgroup;
    }

    /**
     * @param string $matgroup
     * @return ShopLevels
     */
    public function setMatgroup(string $matgroup): ShopLevels
    {
      $this->matgroup = $matgroup;
      return $this;
    }

    /**
     * @return string
     */
    public function getShop_no(): ?string
    {
      return $this->shop_no;
    }

    /**
     * @param string $shop_no
     * @return ShopLevels
     */
    public function setShop_no(string $shop_no): ShopLevels
    {
      $this->shop_no = $shop_no;
      return $this;
    }

}
