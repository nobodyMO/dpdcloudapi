<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class ParcelShopType
{

    /**
     * @var int $ParcelShopID
     */
    protected $ParcelShopID = null;

    /**
     * @var AddressType $ShopAddress
     */
    protected $ShopAddress = null;

    /**
     * @var string $Homepage
     */
    protected $Homepage = null;

    /**
     * @var GeoDataType $GeoData
     */
    protected $GeoData = null;

    /**
     * @var string $ExpressCutOff
     */
    protected $ExpressCutOff = null;

    /**
     * @var ArrayOfShopServiceType $ShopServiceList
     */
    protected $ShopServiceList = null;

    /**
     * @var ArrayOfOpeningHoursType $OpeningHoursList
     */
    protected $OpeningHoursList = null;

    /**
     * @var ArrayOfHolidayType $HolidayList
     */
    protected $HolidayList = null;

    /**
     * @var string $ExtraInfo
     */
    protected $ExtraInfo = null;

    /**
     * @var string $ServiceDetail
     */
    protected $ServiceDetail = null;

    /**
     * @param int $ParcelShopID
     */
    public function __construct($ParcelShopID = null)
    {
      $this->ParcelShopID = $ParcelShopID;
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\ParcelShopType
     */
    public function setParcelShopID($ParcelShopID)
    {
      $this->ParcelShopID = $ParcelShopID;
      return $this;
    }

    /**
     * @return AddressType
     */
    public function getShopAddress()
    {
      return $this->ShopAddress;
    }

    /**
     * @param AddressType $ShopAddress
     * @return \Zuckerwelt\Dpdcloudapi\Model\ParcelShopType
     */
    public function setShopAddress($ShopAddress)
    {
      $this->ShopAddress = $ShopAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getHomepage()
    {
      return $this->Homepage;
    }

    /**
     * @param string $Homepage
     * @return \Zuckerwelt\Dpdcloudapi\Model\ParcelShopType
     */
    public function setHomepage($Homepage)
    {
      $this->Homepage = $Homepage;
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\ParcelShopType
     */
    public function setGeoData($GeoData)
    {
      $this->GeoData = $GeoData;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpressCutOff()
    {
      return $this->ExpressCutOff;
    }

    /**
     * @param string $ExpressCutOff
     * @return \Zuckerwelt\Dpdcloudapi\Model\ParcelShopType
     */
    public function setExpressCutOff($ExpressCutOff)
    {
      $this->ExpressCutOff = $ExpressCutOff;
      return $this;
    }

    /**
     * @return ArrayOfShopServiceType
     */
    public function getShopServiceList()
    {
      return $this->ShopServiceList;
    }

    /**
     * @param ArrayOfShopServiceType $ShopServiceList
     * @return \Zuckerwelt\Dpdcloudapi\Model\ParcelShopType
     */
    public function setShopServiceList($ShopServiceList)
    {
      $this->ShopServiceList = $ShopServiceList;
      return $this;
    }

    /**
     * @return ArrayOfOpeningHoursType
     */
    public function getOpeningHoursList()
    {
      return $this->OpeningHoursList;
    }

    /**
     * @param ArrayOfOpeningHoursType $OpeningHoursList
     * @return \Zuckerwelt\Dpdcloudapi\Model\ParcelShopType
     */
    public function setOpeningHoursList($OpeningHoursList)
    {
      $this->OpeningHoursList = $OpeningHoursList;
      return $this;
    }

    /**
     * @return ArrayOfHolidayType
     */
    public function getHolidayList()
    {
      return $this->HolidayList;
    }

    /**
     * @param ArrayOfHolidayType $HolidayList
     * @return \Zuckerwelt\Dpdcloudapi\Model\ParcelShopType
     */
    public function setHolidayList($HolidayList)
    {
      $this->HolidayList = $HolidayList;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtraInfo()
    {
      return $this->ExtraInfo;
    }

    /**
     * @param string $ExtraInfo
     * @return \Zuckerwelt\Dpdcloudapi\Model\ParcelShopType
     */
    public function setExtraInfo($ExtraInfo)
    {
      $this->ExtraInfo = $ExtraInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceDetail()
    {
      return $this->ServiceDetail;
    }

    /**
     * @param string $ServiceDetail
     * @return \Zuckerwelt\Dpdcloudapi\Model\ParcelShopType
     */
    public function setServiceDetail($ServiceDetail)
    {
      $this->ServiceDetail = $ServiceDetail;
      return $this;
    }

}
