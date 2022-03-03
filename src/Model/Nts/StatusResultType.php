<?php

namespace BaseLinkerNts\Model\Nts;

use DateTime;

class StatusResultType
{

    /**
     * @var string|null $order_status
     */
    protected ?string $order_status;

    /**
     * @var string|null $order_waybill_no
     */
    protected ?string $order_waybill_no;

    /**
     * @var string|null $order_last_update_user
     */
    protected ?string $order_last_update_user;

    /**
     * @var string|null $order_last_update_date
     */
    protected ?string $order_last_update_date;

    /**
     * @var string|null $ord_note
     */
    protected ?string $ord_note;


    /**
     * @return string
     */
    public function getOrder_status(): ?string
    {
      return $this->order_status;
    }

    /**
     * @param string $order_status
     * @return StatusResultType
     */
    public function setOrder_status(string $order_status): StatusResultType
    {
      $this->order_status = $order_status;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrder_waybill_no(): ?string
    {
      return $this->order_waybill_no;
    }

    /**
     * @param string $order_waybill_no
     * @return StatusResultType
     */
    public function setOrder_waybill_no(string $order_waybill_no): StatusResultType
    {
      $this->order_waybill_no = $order_waybill_no;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrder_last_update_user(): ?string
    {
      return $this->order_last_update_user;
    }

    /**
     * @param string $order_last_update_user
     * @return StatusResultType
     */
    public function setOrder_last_update_user(string $order_last_update_user): StatusResultType
    {
      $this->order_last_update_user = $order_last_update_user;
      return $this;
    }

    /**
     * @return DateTime
     */
    public function getOrder_last_update_date(): ?DateTime
    {
      if ($this->order_last_update_date == null) {
        return null;
      }

        try {
          return new DateTime($this->order_last_update_date);
        } catch (\Exception $e) {
          return null;
        }
    }

    /**
     * @param DateTime|null $order_last_update_date
     * @return StatusResultType
     */
    public function setOrder_last_update_date(DateTime $order_last_update_date = null): StatusResultType
    {
      if ($order_last_update_date == null) {
       $this->order_last_update_date = null;
      } else {
        $this->order_last_update_date = $order_last_update_date->format(DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getOrd_note(): ?string
    {
      return $this->ord_note;
    }

    /**
     * @param string $ord_note
     * @return StatusResultType
     */
    public function setOrd_note(string $ord_note): StatusResultType
    {
      $this->ord_note = $ord_note;
      return $this;
    }

}
