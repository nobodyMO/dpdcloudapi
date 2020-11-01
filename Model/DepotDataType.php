<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class DepotDataType
{

    /**
     * @var string $Depot
     */
    protected $Depot = null;

    /**
     * @var GeoDataType $GeoData
     */
    protected $GeoData = null;

    /**
     * @var AddressType $Address
     */
    protected $Address = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDepot()
    {
      return $this->Depot;
    }

    /**
     * @param string $Depot
     * @return \Zuckerwelt\Dpdcloudapi\Model\DepotDataType
     */
    public function setDepot($Depot)
    {
      $this->Depot = $Depot;
      return $this;
    }

    /**
     * @return GeoDataType
     */
    public function getGeoData()
    {
      return $this->GeoData;
    }

    /**
     * @param GeoDataType $GeoData
     * @return \Zuckerwelt\Dpdcloudapi\Model\DepotDataType
     */
    public function setGeoData($GeoData)
    {
      $this->GeoData = $GeoData;
      return $this;
    }

    /**
     * @return AddressType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param AddressType $Address
     * @return \Zuckerwelt\Dpdcloudapi\Model\DepotDataType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}
