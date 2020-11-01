<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class StatusInfoContainerType
{

    /**
     * @var StatusInfoType $Start
     */
    protected $Start = null;

    /**
     * @var StatusInfoType $OnTheRoad
     */
    protected $OnTheRoad = null;

    /**
     * @var StatusInfoType $DeliveryDepot
     */
    protected $DeliveryDepot = null;

    /**
     * @var StatusInfoType $CarLoad
     */
    protected $CarLoad = null;

    /**
     * @var StatusInfoType $Delivered
     */
    protected $Delivered = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StatusInfoType
     */
    public function getStart()
    {
      return $this->Start;
    }

    /**
     * @param StatusInfoType $Start
     * @return \Zuckerwelt\Dpdcloudapi\Model\StatusInfoContainerType
     */
    public function setStart($Start)
    {
      $this->Start = $Start;
      return $this;
    }

    /**
     * @return StatusInfoType
     */
    public function getOnTheRoad()
    {
      return $this->OnTheRoad;
    }

    /**
     * @param StatusInfoType $OnTheRoad
     * @return \Zuckerwelt\Dpdcloudapi\Model\StatusInfoContainerType
     */
    public function setOnTheRoad($OnTheRoad)
    {
      $this->OnTheRoad = $OnTheRoad;
      return $this;
    }

    /**
     * @return StatusInfoType
     */
    public function getDeliveryDepot()
    {
      return $this->DeliveryDepot;
    }

    /**
     * @param StatusInfoType $DeliveryDepot
     * @return \Zuckerwelt\Dpdcloudapi\Model\StatusInfoContainerType
     */
    public function setDeliveryDepot($DeliveryDepot)
    {
      $this->DeliveryDepot = $DeliveryDepot;
      return $this;
    }

    /**
     * @return StatusInfoType
     */
    public function getCarLoad()
    {
      return $this->CarLoad;
    }

    /**
     * @param StatusInfoType $CarLoad
     * @return \Zuckerwelt\Dpdcloudapi\Model\StatusInfoContainerType
     */
    public function setCarLoad($CarLoad)
    {
      $this->CarLoad = $CarLoad;
      return $this;
    }

    /**
     * @return StatusInfoType
     */
    public function getDelivered()
    {
      return $this->Delivered;
    }

    /**
     * @param StatusInfoType $Delivered
     * @return \Zuckerwelt\Dpdcloudapi\Model\StatusInfoContainerType
     */
    public function setDelivered($Delivered)
    {
      $this->Delivered = $Delivered;
      return $this;
    }

}
