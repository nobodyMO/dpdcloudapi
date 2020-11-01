<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class TrackingResult
{

    /**
     * @var ShipmentInfo $shipmentInfo
     */
    protected $shipmentInfo = null;

    /**
     * @var StatusInfo[] $statusInfo
     */
    protected $statusInfo = null;

    /**
     * @var ContentItem[] $contactInfo
     */
    protected $contactInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShipmentInfo
     */
    public function getShipmentInfo()
    {
      return $this->shipmentInfo;
    }

    /**
     * @param ShipmentInfo $shipmentInfo
     * @return \Zuckerwelt\Dpdcloudapi\Model\TrackingResult
     */
    public function setShipmentInfo($shipmentInfo)
    {
      $this->shipmentInfo = $shipmentInfo;
      return $this;
    }

    /**
     * @return StatusInfo[]
     */
    public function getStatusInfo()
    {
      return $this->statusInfo;
    }

    /**
     * @param StatusInfo[] $statusInfo
     * @return \Zuckerwelt\Dpdcloudapi\Model\TrackingResult
     */
    public function setStatusInfo(array $statusInfo = null)
    {
      $this->statusInfo = $statusInfo;
      return $this;
    }

    /**
     * @return ContentItem[]
     */
    public function getContactInfo()
    {
      return $this->contactInfo;
    }

    /**
     * @param ContentItem[] $contactInfo
     * @return \Zuckerwelt\Dpdcloudapi\Model\TrackingResult
     */
    public function setContactInfo(array $contactInfo = null)
    {
      $this->contactInfo = $contactInfo;
      return $this;
    }

}
