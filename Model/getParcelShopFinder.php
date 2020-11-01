<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;
use Zuckerwelt\Dpdcloudapi\Model\getParcelShopFinderRequestType;

class getParcelShopFinder
{

    /**
     * @var getParcelShopFinderRequestType $getParcelShopFinderRequest
     */
    protected $getParcelShopFinderRequest = null;

    /**
     * @param getParcelShopFinderRequestType $getParcelShopFinderRequest
     */
    public function __construct($partnerName, $partnerToken, $userName, $userToken, $language,$searchMode = SearchModeType::SearchByGeoData, $maxReturnValues = 10,  $needService = dpdServiceType::StandardService,array $searchAddress=null,array $searchGeoData = null,\DateTime $hideOnClosedAt=null)
    {
      $this->getParcelShopFinderRequest = new getParcelShopFinderRequestType ($partnerName, $partnerToken, $userName, $userToken, $language, $searchMode, $maxReturnValues,  $needService, $searchAddress, $searchGeoData, $hideOnClosedAt);
    }

    /**
     * @return getParcelShopFinderRequestType
     */
    public function getGetParcelShopFinderRequest()
    {
      return $this->getParcelShopFinderRequest;
    }

    /**
     * @param getParcelShopFinderRequestType $getParcelShopFinderRequest
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelShopFinder
     */
    public function setGetParcelShopFinderRequest($getParcelShopFinderRequest)
    {
      $this->getParcelShopFinderRequest = $getParcelShopFinderRequest;
      return $this;
    }

}
