<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class OrderStatusType
{

    /**
     * @var string $ParcelNo
     */
    protected $ParcelNo = null;

    /**
     * @var OrderInformationType $OrderInformation
     */
    protected $OrderInformation = null;

    /**
     * @var AddressType $ShipAddress
     */
    protected $ShipAddress = null;

    /**
     * @var StatusInfoType $LastStatusInfo
     */
    protected $LastStatusInfo = null;

    /**
     * @var StatusInfoContainerType $StatusInfoContainer
     */
    protected $StatusInfoContainer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getParcelNo()
    {
      return $this->ParcelNo;
    }

    /**
     * @param string $ParcelNo
     * @return \Zuckerwelt\Dpdcloudapi\Model\OrderStatusType
     */
    public function setParcelNo($ParcelNo)
    {
      $this->ParcelNo = $ParcelNo;
      return $this;
    }

    /**
     * @return OrderInformationType
     */
    public function getOrderInformation()
    {
      return $this->OrderInformation;
    }

    /**
     * @param OrderInformationType $OrderInformation
     * @return \Zuckerwelt\Dpdcloudapi\Model\OrderStatusType
     */
    public function setOrderInformation($OrderInformation)
    {
      $this->OrderInformation = $OrderInformation;
      return $this;
    }

    /**
     * @return AddressType
     */
    public function getShipAddress()
    {
      return $this->ShipAddress;
    }

    /**
     * @param AddressType $ShipAddress
     * @return \Zuckerwelt\Dpdcloudapi\Model\OrderStatusType
     */
    public function setShipAddress($ShipAddress)
    {
      $this->ShipAddress = $ShipAddress;
      return $this;
    }

    /**
     * @return StatusInfoType
     */
    public function getLastStatusInfo()
    {
      return $this->LastStatusInfo;
    }

    /**
     * @param StatusInfoType $LastStatusInfo
     * @return \Zuckerwelt\Dpdcloudapi\Model\OrderStatusType
     */
    public function setLastStatusInfo($LastStatusInfo)
    {
      $this->LastStatusInfo = $LastStatusInfo;
      return $this;
    }

    /**
     * @return StatusInfoContainerType
     */
    public function getStatusInfoContainer()
    {
      return $this->StatusInfoContainer;
    }

    /**
     * @param StatusInfoContainerType $StatusInfoContainer
     * @return \Zuckerwelt\Dpdcloudapi\Model\OrderStatusType
     */
    public function setStatusInfoContainer($StatusInfoContainer)
    {
      $this->StatusInfoContainer = $StatusInfoContainer;
      return $this;
    }

}
