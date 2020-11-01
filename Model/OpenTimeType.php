<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class OpenTimeType
{

    /**
     * @var string $TimeFrom
     */
    protected $TimeFrom = null;

    /**
     * @var string $TimeEnd
     */
    protected $TimeEnd = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getTimeFrom()
    {
      return $this->TimeFrom;
    }

    /**
     * @param string $TimeFrom
     * @return \Zuckerwelt\Dpdcloudapi\Model\OpenTimeType
     */
    public function setTimeFrom($TimeFrom)
    {
      $this->TimeFrom = $TimeFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimeEnd()
    {
      return $this->TimeEnd;
    }

    /**
     * @param string $TimeEnd
     * @return \Zuckerwelt\Dpdcloudapi\Model\OpenTimeType
     */
    public function setTimeEnd($TimeEnd)
    {
      $this->TimeEnd = $TimeEnd;
      return $this;
    }

}
