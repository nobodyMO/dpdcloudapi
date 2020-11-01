<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class HolidayType
{

    /**
     * @var \DateTime $HolidayFrom
     */
    protected $HolidayFrom = null;

    /**
     * @var \DateTime $HolidayEnd
     */
    protected $HolidayEnd = null;

    /**
     * @param \DateTime $HolidayFrom
     * @param \DateTime $HolidayEnd
     */
    public function __construct(\DateTime $HolidayFrom = null, \DateTime $HolidayEnd = null)
    {
      $this->HolidayFrom = $HolidayFrom ? $HolidayFrom->format(\DateTime::ATOM) : null;
      $this->HolidayEnd = $HolidayEnd ? $HolidayEnd->format(\DateTime::ATOM) : null;
    }

    /**
     * @return \DateTime
     */
    public function getHolidayFrom()
    {
      if ($this->HolidayFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->HolidayFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $HolidayFrom
     * @return \Zuckerwelt\Dpdcloudapi\Model\HolidayType
     */
    public function setHolidayFrom(\DateTime $HolidayFrom)
    {
      $this->HolidayFrom = $HolidayFrom->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getHolidayEnd()
    {
      if ($this->HolidayEnd == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->HolidayEnd);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $HolidayEnd
     * @return \Zuckerwelt\Dpdcloudapi\Model\HolidayType
     */
    public function setHolidayEnd(\DateTime $HolidayEnd)
    {
      $this->HolidayEnd = $HolidayEnd->format(\DateTime::ATOM);
      return $this;
    }

}
