<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class getOrderStatusRequestType
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
    protected $PartnerCredentials;

    /**
     * @var UserCredentialType $UserCredentials
     */
    protected $UserCredentials;

    /**
     * @var string $ParcelNo
     */
    protected $ParcelNo;

    /**
     * @var string $DeliveryZipCode
     */
    protected $DeliveryZipCode;

    /**
     * @param int $Version
     */
    public function __construct($partnerName, $partnerToken, $userName, $userToken, $language,$parcelNo,$deliveryZipCode = null)
    {
      $this->Language = $language;
      $this->ParcelNo = $parcelNo;
      $this->DeliveryZipCode = $deliveryZipCode;
	  $this->PartnerCredentials= new PartnerCredentialType ($partnerName, $partnerToken);
      $this->UserCredentials= new UserCredentialType ($userName, $userToken);
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\getOrderStatusRequestType
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\getOrderStatusRequestType
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\getOrderStatusRequestType
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\getOrderStatusRequestType
     */
    public function setUserCredentials($UserCredentials)
    {
      $this->UserCredentials = $UserCredentials;
      return $this;
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\getOrderStatusRequestType
     */
    public function setParcelNo($ParcelNo)
    {
      $this->ParcelNo = $ParcelNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryZipCode()
    {
      return $this->DeliveryZipCode;
    }

    /**
     * @param string $DeliveryZipCode
     * @return \Zuckerwelt\Dpdcloudapi\Model\getOrderStatusRequestType
     */
    public function setDeliveryZipCode($DeliveryZipCode)
    {
      $this->DeliveryZipCode = $DeliveryZipCode;
      return $this;
    }

}
