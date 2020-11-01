<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class OpeningHoursType
{

    /**
     * @var string $WeekDay
     */
    protected $WeekDay = null;

    /**
     * @var ArrayOfOpenTimeType $OpenTimeList
     */
    protected $OpenTimeList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getWeekDay()
    {
      return $this->WeekDay;
    }

    /**
     * @param string $WeekDay
     * @return \Zuckerwelt\Dpdcloudapi\Model\OpeningHoursType
     */
    public function setWeekDay($WeekDay)
    {
      $this->WeekDay = $WeekDay;
      return $this;
    }

    /**
     * @return ArrayOfOpenTimeType
     */
    public function getOpenTimeList()
    {
      return $this->OpenTimeList;
    }

    /**
     * @param ArrayOfOpenTimeType $OpenTimeList
     * @return \Zuckerwelt\Dpdcloudapi\Model\OpeningHoursType
     */
    public function setOpenTimeList($OpenTimeList)
    {
      $this->OpenTimeList = $OpenTimeList;
      return $this;
    }

}
