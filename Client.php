<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi;

use Zuckerwelt\Dpdcloudapi\Model\SoapClient;
use Zuckerwelt\Dpdcloudapi\Model\setOrder;
use Zuckerwelt\Dpdcloudapi\Model\OrderActionType;
use Zuckerwelt\Dpdcloudapi\Model\OrderSettingsType;
use Zuckerwelt\Dpdcloudapi\Model\LabelSizeType;
use Zuckerwelt\Dpdcloudapi\Model\LabelStartPositionType;
use Zuckerwelt\Dpdcloudapi\Model\dpdServiceType;

class Client
{
    const ENDPOINTPRODUCTION = 'https://cloud.dpd.com';
    const ENDPOINTSANDBOX = 'https://cloud-stage.dpd.com';

    const CLIENT_VERSION = '1.0.0';

    /**
     * @var string
     */
    protected $endpoint;

    /**
     * @var Zuckerwelt\Dpdcloudapi\Model\SoapClient
     */	
	protected $soapClient;

	
	private $lastResult;
	

    /**
     * @param string $partnerName partner name to use for the authentication
     * @param string $partnerToken Token associated to the partner name
     * @param string $userName user name to use for the authentication
     * @param string $userToken Token associated to the username
     * @param string $language
     * @param boolean $sandbox
     */
    public function __construct(
	    $partnerName,
		$partnerToken, 
		$userName, 
		$userToken, 
		$language,
		$sandbox
         
    ) {
		if ($sandbox){
			$this->endpoint=self::ENDPOINTSANDBOX;
		} else {
			$this->endpoint=self::ENDPOINTPRODUCTION;
		}

		$this->soapClient = new SoapClient($this->endpoint,$partnerName,$partnerToken,$userName,$userToken,$language);
    }


    /**
     * @return Result Object / Fault Object
     */
    public function getLastResult()
    {
        return $this->lastResult;
    }


    /**
	 * @param array $orders
	 * @param \DateTime $shipDate
	 * @param $OrderAction
	 * @param $labelSize
	 * @param $labelStartPosition
     * @return setOrderResponse
     */
   public function setOrder(array $orders,\DateTime $shipDate,$OrderAction=OrderActionType::startOrder,$labelSize=LabelSizeType::PDF_A6, $labelStartPosition=LabelStartPositionType::UpperLeft)
    {
		$this->lastResult= $this->soapClient->setOrder ($orders,$shipDate,$OrderAction,$labelSize, $labelStartPosition);
		if (is_soap_fault ($this->lastResult)){
			return $this->lastResult;
		} else {
			return $this->lastResult;		  		  
		}
    }

	/*
     * @param string $country
     * @param string $zipCode
     * @param string $city
     * @param string $street
     * @param string $houseNo
     * @param int $limit
     * @param string $availabilityDate
     * @param boolean $hideClosed
     * @param string [] $searchCountry
     * @param dpdServiceType $service
     * @return getParcelShopFinderResponse
     */
   public function findParcelShops($country, $zipCode = null, $city = null, $street = null, $houseNo = null, $limit = 100, $availabilityDate = null, $hideClosed = false, $service = null)
    {
		$this->lastResult= $this->soapClient->findParcelShops ($country, $zipCode, $city, $street, $houseNo, $limit, $availabilityDate, $hideClosed, $service);
 		if (is_soap_fault ($this->lastResult)){
			return $this->lastResult;
		} else {
			return $this->lastResult;		  
		}
    }
 
	/*
     *
     * @param float $longitude
     * @param float $latitude
     * @param int $limit
     * @param availabilityDate $availabilityDate
     * @param boolean $hideClosed
     * @param dpdServiceType $service
     * @return getParcelShopFinderResponse
     */
 
    public function findParcelShopsByGeoData($longitude, $latitude , $limit = 10, $hideClosed = null, $service = dpdServiceType::StandardService){
		$this->lastResult= $this->soapClient->findParcelShopsByGeoData ($longitude, $latitude , $limit, $hideClosed, $service);		
		if (is_soap_fault ($this->lastResult)){
			return $this->lastResult;
		} else {
			return $this->lastResult;		  
		}
	}

	
	/*
     * @param string $parcelNo
     * @param string $deliveryZipCode
     * @return getOrderStatusResponse
     */
    public function getParcelStatus($parcelNo, $deliveryZipCode=null)
    {
		$this->lastResult= $this->soapClient->getParcelStatus($parcelNo,$deliveryZipCode);
		if (is_soap_fault ($this->lastResult)){
			return $this->lastResult;
		} else {
			return $this->lastResult;		  
		}
    }
		
	
}
	
