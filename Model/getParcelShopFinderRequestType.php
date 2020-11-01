<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;
use Zuckerwelt\Dpdcloudapi\Model\SearchModeType;
use Zuckerwelt\Dpdcloudapi\Model\dpdServiceType;
use Zuckerwelt\Dpdcloudapi\Model\SearchAddressType;
use Zuckerwelt\Dpdcloudapi\Model\SearchGeoDataType;

class getParcelShopFinderRequestType
{

    /**
     * @var int $Version
     */
    protected $Version = '100';

    /**
     * @var string $Language
     */
    protected $Language;

    /**
     * @var PartnerCredentialType $PartnerCredentials
     */
    protected $PartnerCredentials = null;

    /**
     * @var UserCredentialType $UserCredentials
     */
    protected $UserCredentials = null;

    /**
     * @var int $MaxReturnValues
     */
    protected $MaxReturnValues;

    /**
     * @var SearchModeType $SearchMode
     */
    protected $SearchMode;

    /**
     * @var SearchAddressType $SearchAddress
     */
    protected $SearchAddress = null;

    /**
     * @var SearchGeoDataType $SearchGeoData
     */
    protected $SearchGeoData = null;

    /**
     * @var string $HideOnClosedAt
     */
    protected $HideOnClosedAt = null;

    /**
     * @var dpdServiceType $NeedService
     */
    protected $NeedService = null;

    /**
     * @param int $Version
     * @param int $MaxReturnValues
     * @param SearchModeType $SearchMode
     * @param dpdServiceType $NeedService
     */
    public function __construct($partnerName, $partnerToken, $userName, $userToken, $language,$searchMode = SearchModeType::SearchByGeoData, $maxReturnValues = 10,  $needService = dpdServiceType::StandardService,array $searchAddress=null,array $searchGeoData = null,\DateTime $hideOnClosedAt=null)
    {
	  $this->PartnerCredentials= new PartnerCredentialType ($partnerName, $partnerToken);
      $this->UserCredentials= new UserCredentialType ($userName, $userToken);		
      $this->Language = $language;
	  
      $this->MaxReturnValues = $maxReturnValues;
      $this->SearchMode = $searchMode;
      $this->NeedService = $needService;
	  if ($searchAddress)  $this->SearchAddress=new SearchAddressType($searchAddress);
	  if ($searchGeoData)  $this->SearchGeoData=new SearchGeoDataType($searchGeoData);
	  if ($hideOnClosedAt) {
		  $hideOnClosedAt->setTimezone(new DateTimeZone("UTC"));		
		  $this->SearchGeoData=$hideOnClosedAt->format("d.m.Y- H:i");
	  }
    }

    /**
     * @return int
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param int $Version
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelShopFinderRequestType
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param string $Language
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelShopFinderRequestType
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

    /**
     * @return PartnerCredentialType
     */
    public function getPartnerCredentials()
    {
      return $this->PartnerCredentials;
    }

    /**
     * @param PartnerCredentialType $PartnerCredentials
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelShopFinderRequestType
     */
    public function setPartnerCredentials($PartnerCredentials)
    {
      $this->PartnerCredentials = $PartnerCredentials;
      return $this;
    }

    /**
     * @return UserCredentialType
     */
    public function getUserCredentials()
    {
      return $this->UserCredentials;
    }

    /**
     * @param UserCredentialType $UserCredentials
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelShopFinderRequestType
     */
    public function setUserCredentials($UserCredentials)
    {
      $this->UserCredentials = $UserCredentials;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxReturnValues()
    {
      return $this->MaxReturnValues;
    }

    /**
     * @param int $MaxReturnValues
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelShopFinderRequestType
     */
    public function setMaxReturnValues($MaxReturnValues)
    {
      $this->MaxReturnValues = $MaxReturnValues;
      return $this;
    }

    /**
     * @return SearchModeType
     */
    public function getSearchMode()
    {
      return $this->SearchMode;
    }

    /**
     * @param SearchModeType $SearchMode
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelShopFinderRequestType
     */
    public function setSearchMode($SearchMode)
    {
      $this->SearchMode = $SearchMode;
      return $this;
    }

    /**
     * @return SearchAddressType
     */
    public function getSearchAddress()
    {
      return $this->SearchAddress;
    }

    /**
     * @param SearchAddressType $SearchAddress
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelShopFinderRequestType
     */
    public function setSearchAddress($SearchAddress)
    {
      $this->SearchAddress = $SearchAddress;
      return $this;
    }

    /**
     * @return SearchGeoDataType
     */
    public function getSearchGeoData()
    {
      return $this->SearchGeoData;
    }

    /**
     * @param SearchGeoDataType $SearchGeoData
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelShopFinderRequestType
     */
    public function setSearchGeoData($SearchGeoData)
    {
      $this->SearchGeoData = $SearchGeoData;
      return $this;
    }

    /**
     * @return string
     */
    public function getHideOnClosedAt()
    {
      return $this->HideOnClosedAt;
    }

    /**
     * @param string $HideOnClosedAt
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelShopFinderRequestType
     */
    public function setHideOnClosedAt($HideOnClosedAt)
    {
      $this->HideOnClosedAt = $HideOnClosedAt;
      return $this;
    }

    /**
     * @return dpdServiceType
     */
    public function getNeedService()
    {
      return $this->NeedService;
    }

    /**
     * @param dpdServiceType $NeedService
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelShopFinderRequestType
     */
    public function setNeedService($NeedService)
    {
      $this->NeedService = $NeedService;
      return $this;
    }

}
