<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;
use Zuckerwelt\Dpdcloudapi\Model\AddressType;
use Zuckerwelt\Dpdcloudapi\Model\ParcelDataType;

class OrderDataType
{

    /**
     * @var AddressType $ShipAddress
     */
    protected $ShipAddress = null;

    /**
     * @var int $ParcelShopID
     */
    protected $ParcelShopID = 0;

    /**
     * @var ParcelDataType $ParcelData
     */
    protected $ParcelData = null;

    /**
     * @param int $ParcelShopID
     */
    public function __construct(array $order=null)
    {
		if (!is_null($order)) {	  
			if (isset ($order['ShipAddress'])) $this->ShipAddress = new AddressType($order['ShipAddress']);
			if (isset ($order['ParcelShopID'])) $this->ParcelShopID = $order['ParcelShopID'];
			if (isset ($order['ParcelData'])) $this->ParcelData = new ParcelDataType($order['ParcelData']);
		}
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\OrderDataType
     */
    public function setShipAddress($ShipAddress)
    {
      $this->ShipAddress = $ShipAddress;
      return $this;
    }

    /**
     * @return int
     */
    public function getParcelShopID()
    {
      return $this->ParcelShopID;
    }

    /**
     * @param int $ParcelShopID
     * @return \Zuckerwelt\Dpdcloudapi\Model\OrderDataType
     */
    public function setParcelShopID($ParcelShopID)
    {
      $this->ParcelShopID = $ParcelShopID;
      return $this;
    }

    /**
     * @return ParcelDataType
     */
    public function getParcelData()
    {
      return $this->ParcelData;
    }

    /**
     * @param ParcelDataType $ParcelData
     * @return \Zuckerwelt\Dpdcloudapi\Model\OrderDataType
     */
    public function setParcelData($ParcelData)
    {
      $this->ParcelData = $ParcelData;
      return $this;
    }

}
