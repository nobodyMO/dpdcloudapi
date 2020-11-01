<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;
use Zuckerwelt\Dpdcloudapi\Model\setOrder;
use Zuckerwelt\Dpdcloudapi\Model\getParcelShopFinder;
use Zuckerwelt\Dpdcloudapi\Model\OrderActionType;
use Zuckerwelt\Dpdcloudapi\Model\OrderSettingsType;
use Zuckerwelt\Dpdcloudapi\Model\LabelSizeType;
use Zuckerwelt\Dpdcloudapi\Model\SearchModeType;
use Zuckerwelt\Dpdcloudapi\Model\SearchAddressType;
use Zuckerwelt\Dpdcloudapi\Model\getOrderStatus;

use Zend\Log\Writer\Stream;
use Zend\Log\Logger;

class SoapClient extends \SoapClient
{

	const WSDL='../wsdl/DPDCloudService.wsdl';
	
    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'getZipCodeRules' => 'Zuckerwelt\\Dpdcloudapi\\Model\\getZipCodeRules',
      'getZipCodeRulesRequestType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\getZipCodeRulesRequestType',
      'PartnerCredentialType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\PartnerCredentialType',
      'UserCredentialType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\UserCredentialType',
      'getZipCodeRulesResponse' => 'Zuckerwelt\\Dpdcloudapi\\Model\\getZipCodeRulesResponse',
      'getZipCodeRulesResponseType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\getZipCodeRulesResponseType',
      'ZipCodeRulesType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\ZipCodeRulesType',
      'ArrayOfErrorDataType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\ArrayOfErrorDataType',
      'ErrorDataType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\ErrorDataType',
      'setOrder' => 'Zuckerwelt\\Dpdcloudapi\\Model\\setOrder',
      'setOrderRequestType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\setOrderRequestType',
      'OrderSettingsType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\OrderSettingsType',
      'ArrayOfOrderDataType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\ArrayOfOrderDataType',
      'OrderDataType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\OrderDataType',
      'AddressType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\AddressType',
      'ParcelDataType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\ParcelDataType',
      'CODType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\CODType',
      'setOrderResponse' => 'Zuckerwelt\\Dpdcloudapi\\Model\\setOrderResponse',
      'setOrderResponseType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\setOrderResponseType',
      'LabelResponseType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\LabelResponseType',
      'ArrayOfLabelDataType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\ArrayOfLabelDataType',
      'LabelDataType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\LabelDataType',
      'getParcelShopFinder' => 'Zuckerwelt\\Dpdcloudapi\\Model\\getParcelShopFinder',
      'getParcelShopFinderRequestType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\getParcelShopFinderRequestType',
      'SearchAddressType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\SearchAddressType',
      'SearchGeoDataType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\SearchGeoDataType',
      'getParcelShopFinderResponse' => 'Zuckerwelt\\Dpdcloudapi\\Model\\getParcelShopFinderResponse',
      'getParcelShopFinderResponseType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\getParcelShopFinderResponseType',
      'ArrayOfParcelShopType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\ArrayOfParcelShopType',
      'ParcelShopType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\ParcelShopType',
      'GeoDataType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\GeoDataType',
      'ArrayOfShopServiceType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\ArrayOfShopServiceType',
      'ArrayOfOpeningHoursType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\ArrayOfOpeningHoursType',
      'OpeningHoursType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\OpeningHoursType',
      'ArrayOfOpenTimeType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\ArrayOfOpenTimeType',
      'OpenTimeType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\OpenTimeType',
      'ArrayOfHolidayType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\ArrayOfHolidayType',
      'HolidayType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\HolidayType',
      'getParcelLifeCycle' => 'Zuckerwelt\\Dpdcloudapi\\Model\\getParcelLifeCycle',
      'getParcelLifeCycleRequestType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\getParcelLifeCycleRequestType',
      'getParcelLifeCycleResponse' => 'Zuckerwelt\\Dpdcloudapi\\Model\\getParcelLifeCycleResponse',
      'getParcelLifeCycleResponseType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\getParcelLifeCycleResponseType',
      'getOrderStatus' => 'Zuckerwelt\\Dpdcloudapi\\Model\\getOrderStatus',
      'getOrderStatusRequestType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\getOrderStatusRequestType',
      'getOrderStatusResponse' => 'Zuckerwelt\\Dpdcloudapi\\Model\\getOrderStatusResponse',
      'getOrderStatusResponseType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\getOrderStatusResponseType',
      'OrderStatusType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\OrderStatusType',
      'OrderInformationType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\OrderInformationType',
      'StatusInfoType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\StatusInfoType',
      'DepotDataType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\DepotDataType',
      'StatusInfoContainerType' => 'Zuckerwelt\\Dpdcloudapi\\Model\\StatusInfoContainerType',
      'ArrayOfErrorDataType1' => 'Zuckerwelt\\Dpdcloudapi\\Model\\ArrayOfErrorDataType1',
      'TrackingResult' => 'Zuckerwelt\\Dpdcloudapi\\Model\\TrackingResult',
      'ShipmentInfo' => 'Zuckerwelt\\Dpdcloudapi\\Model\\ShipmentInfo',
      'StatusInfo' => 'Zuckerwelt\\Dpdcloudapi\\Model\\StatusInfo',
      'ContentLine' => 'Zuckerwelt\\Dpdcloudapi\\Model\\ContentLine',
      'ContentItem' => 'Zuckerwelt\\Dpdcloudapi\\Model\\ContentItem',
      'TrackingProperty' => 'Zuckerwelt\\Dpdcloudapi\\Model\\TrackingProperty',
    );


	private $endpoint;
	private $partnerName;
	private $partnerToken;
	private $userName;
	private $userToken;
	private $language;

	
		
    /**
     * @param string $endpoint
     * @param string $partnerToken Token associated to the partner name
     * @param string $userName user name to use for the authentication
     * @param string $userToken Token associated to the username
     * @param string $language
     */

    public function __construct(
		$endpoint,
	    $partnerName,
		$partnerToken, 
		$userName, 
		$userToken, 
		$language
		)
    {
		$this->endpoint=$endpoint;
		$this->partnerName=$partnerName;
		$this->partnerToken=$partnerToken;
		$this->userName=$userName;
		$this->userToken=$userToken;
		$this->language=$language;

		$options = array (
			'features' => 1,
			'trace' => 1,
			'exceptions' => true,
			);

      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      parent::__construct(dirname(__FILE__) . DIRECTORY_SEPARATOR . self::WSDL, $options);
		
 	$this->__setLocation($this->endpoint . '/services/v1/DPDCloudService.asmx');
    }

     public function getLanguageCode ()
	 {
		if ($this->language == 'English')
			return 'en_EN';
		else
			return 'de_DE';
	 }
		
    /**
	 * @param array $orders
	 * @param \DateTime $shipDate
	 * @param $OrderAction
	 * @param $labelSize
	 * @param $labelStartPosition
     * @return setOrderResponse
     */
    public function setOrder(array $orders,\DateTime $shipDate,$OrderAction=OrderActionType::startOrder,$labelSize=LabelSizeType::PDF_A6, $labelStartPosition=null)
    {
		$shippingrequest = new setOrder ($orders, $this->partnerName, $this->partnerToken, $this->userName, $this->userToken, $this->getLanguageCode(),$OrderAction,$shipDate,$labelSize, $labelStartPosition);
        try {
			$response = $this->__soapCall('setOrder', array($shippingrequest));
 		    $this->printLog(print_r ($this->__getLastRequest(),true));
		    $this->printLog(print_r ($this->__getLastResponse(),true));
		} catch (\SoapFault $exception) {
		   $response = $exception;
 		    $this->printLog(print_r ($this->__getLastRequest(),true));
		    $this->printLog(print_r ($this->__getLastResponse(),true));		   
		   
		}
		return 	$response;	  
				
    }
	
	
    /**
     * @param getParcelShopFinder $parameters
     * @return getParcelShopFinderResponse
     */
    public function findParcelShops($country, $zipCode = null, $city = null, $street = null, $houseNo = null, $limit=10, $availabilityDate = null, $hideClosed = false, $service = dpdServiceType::StandardService)	
    {
		$hideOnClosedAt=null;
		if ($hideClosed) $hideOnClosedAt= new \DateTime ();
		
		$ParcelShopFinder= new getParcelShopFinder ($this->partnerName, 
													$this->partnerToken, 
													$this->userName, 
													$this->userToken, 
													$this->getLanguageCode(),
													SearchModeType::SearchByAddress, 
													$limit,  
													$service ,
													['Street' => $street,
													 'HouseNo' => $houseNo,
													 'ZipCode' => $zipCode,
													 'City' => $city,
													 'Country' => $country ],
													null,
													$hideOnClosedAt);
		
	  
        try {
			$response = $this->__soapCall('getParcelShopFinder', array($ParcelShopFinder));
 		    $this->printLog(print_r ($this->__getLastRequest(),true));
		    $this->printLog(print_r ($this->__getLastResponse(),true));
		} catch (\SoapFault $exception) {
		   $response = $exception;
 		    $this->printLog(print_r ($this->__getLastRequest(),true));
		    $this->printLog(print_r ($this->__getLastResponse(),true));		   
		   
		}
		return 	$response;	  
	  
    }


    public function findParcelShopsByGeoData($longitude, $latitude, $limit = 10, $hideClosed = null, $service = null)
    {
		$hideOnClosedAt=null;
		if ($hideClosed) $hideOnClosedAt= new \DateTime ();
		
		$ParcelShopFinder= new getParcelShopFinder ($this->partnerName, 
													$this->partnerToken, 
													$this->userName, 
													$this->userToken, 
													$this->getLanguageCode(),
													SearchModeType::SearchByGeoData, 
													$limit,  
													$service,
													null,
													[
													'Longitude' =>$longitude,
													'Latitude' =>$latitude],
													$hideOnClosedAt);
		
	  
        try {
			$response = $this->__soapCall('getParcelShopFinder', array($ParcelShopFinder));
 		    $this->printLog(print_r ($this->__getLastRequest(),true));
		    $this->printLog(print_r ($this->__getLastResponse(),true));
		} catch (\SoapFault $exception) {
		   $response = $exception;
 		    $this->printLog(print_r ($this->__getLastRequest(),true));
		    $this->printLog(print_r ($this->__getLastResponse(),true));		   
		   
		}
		return 	$response;	  
	  
    }


    public function getParcelStatus($parcelNo, $deliveryZipCode=null)
    {
		$orderParameter= new getOrderStatus ($this->partnerName, 
													$this->partnerToken, 
													$this->userName, 
													$this->userToken, 
													$this->getLanguageCode(),
													$parcelNo, 
													$deliveryZipCode
											);
		
	  
        try {
			$response = $this->__soapCall('getOrderStatus', array($orderParameter));
 		    $this->printLog(print_r ($this->__getLastRequest(),true));
		    $this->printLog(print_r ($this->__getLastResponse(),true));
		} catch (\SoapFault $exception) {
		   $response = $exception;
 		    $this->printLog(print_r ($this->__getLastRequest(),true));
		    $this->printLog(print_r ($this->__getLastResponse(),true));		   
		   
		}
		return 	$response;	  
	  
    }

	public function printLog($log) {
       $writer = new Stream(BP . '/var/log/dpdclient.log');
       $logger = new Logger();
       $logger->addWriter($writer);
       $logger->info($log);
	}	

}
