<?php
namespace infobip\api\model\sms\mt\send;

/**
 * This is a generated class and is not intended for modification!
 */
class DeliveryTimeWindow implements \JsonSerializable
{
    /**
     * @var \infobip\api\model\sms\mt\send\DeliveryTime
     */
    private $from;
    /**
     * @var \infobip\api\model\sms\mt\send\DeliveryTime
     */
    private $to;
    /**
     * @var \string[]
     */
    private $days;


    /**
     * @param \infobip\api\model\sms\mt\send\DeliveryTime $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return \infobip\api\model\sms\mt\send\DeliveryTime
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param \infobip\api\model\sms\mt\send\DeliveryTime $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }

    /**
     * @return \infobip\api\model\sms\mt\send\DeliveryTime
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param \string[] $days
     */
    public function setDays($days)
    {
        $this->days = $days;
    }

    /**
     * @return \string[]
     */
    public function getDays()
    {
        return $this->days;
    }


  /**
   * (PHP 5 &gt;= 5.4.0)<br/>
   * Specify data which should be serialized to JSON
   * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
   * @return mixed data which can be serialized by <b>json_encode</b>,
   * which is a value of any type other than a resource.
   */
  function jsonSerialize()
  {
      return get_object_vars($this);
  }
}