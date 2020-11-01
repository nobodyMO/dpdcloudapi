<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;


/**
 * Version 1.0
 */
class DPDCloudService_v1 extends \SoapClient
{

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

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://cloud-stage.dpd.com/services/v1/DPDCloudService.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param getZipCodeRules $parameters
     * @return getZipCodeRulesResponse
     */
    public function getZipCodeRules(getZipCodeRules $parameters)
    {
      return $this->__soapCall('getZipCodeRules', array($parameters));
    }

    /**
     * @param setOrder $parameters
     * @return setOrderResponse
     */
    public function setOrder(setOrder $parameters)
    {
      return $this->__soapCall('setOrder', array($parameters));
    }

    /**
     * @param getParcelShopFinder $parameters
     * @return getParcelShopFinderResponse
     */
    public function getParcelShopFinder(getParcelShopFinder $parameters)
    {
      return $this->__soapCall('getParcelShopFinder', array($parameters));
    }

    /**
     * @param getParcelLifeCycle $parameters
     * @return getParcelLifeCycleResponse
     */
    public function getParcelLifeCycle(getParcelLifeCycle $parameters)
    {
      return $this->__soapCall('getParcelLifeCycle', array($parameters));
    }

    /**
     * @param getOrderStatus $parameters
     * @return getOrderStatusResponse
     */
    public function getOrderStatus(getOrderStatus $parameters)
    {
      return $this->__soapCall('getOrderStatus', array($parameters));
    }

}
