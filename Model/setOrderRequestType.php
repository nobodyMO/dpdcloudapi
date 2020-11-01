<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;
use Zuckerwelt\Dpdcloudapi\Model\PartnerCredentialType;
use Zuckerwelt\Dpdcloudapi\Model\UserCredentialType;
use Zuckerwelt\Dpdcloudapi\Model\ArrayOfOrderDataType;
class setOrderRequestType
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
     * @var OrderActionType $OrderAction
     */
    protected $OrderAction;

    /**
     * @var OrderSettingsType $OrderSettings
     */
    protected $OrderSettings = null;

    /**
     * @var ArrayOfOrderDataType $OrderDataList
     */
    protected $OrderDataList = null;

    /**
     * @param array $orders
     * @param OrderActionType $OrderAction
     */
    public function __construct(array $orders, $partnerName, $partnerToken, $userName, $userToken, $language,$orderAction,$shipDate,$labelSize, $labelStartPosition)
    {
      $this->Language = $language;
      $this->OrderAction = $orderAction;
	  $this->PartnerCredentials= new PartnerCredentialType ($partnerName, $partnerToken);
      $this->UserCredentials= new UserCredentialType ($userName, $userToken);
	  $this->OrderSettings= new OrderSettingsType ($shipDate,$labelSize, $labelStartPosition);
	  $this->OrderDataList= new  ArrayOfOrderDataType ($orders);
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\setOrderRequestType
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\setOrderRequestType
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\setOrderRequestType
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\setOrderRequestType
     */
    public function setUserCredentials($UserCredentials)
    {
      $this->UserCredentials = $UserCredentials;
      return $this;
    }

    /**
     * @return OrderActionType
     */
    public function getOrderAction()
    {
      return $this->OrderAction;
    }

    /**
     * @param OrderActionType $OrderAction
     * @return \Zuckerwelt\Dpdcloudapi\Model\setOrderRequestType
     */
    public function setOrderAction($OrderAction)
    {
      $this->OrderAction = $OrderAction;
      return $this;
    }

    /**
     * @return OrderSettingsType
     */
    public function getOrderSettings()
    {
      return $this->OrderSettings;
    }

    /**
     * @param OrderSettingsType $OrderSettings
     * @return \Zuckerwelt\Dpdcloudapi\Model\setOrderRequestType
     */
    public function setOrderSettings($OrderSettings)
    {
      $this->OrderSettings = $OrderSettings;
      return $this;
    }

    /**
     * @return ArrayOfOrderDataType
     */
    public function getOrderDataList()
    {
      return $this->OrderDataList;
    }

    /**
     * @param ArrayOfOrderDataType $OrderDataList
     * @return \Zuckerwelt\Dpdcloudapi\Model\setOrderRequestType
     */
    public function setOrderDataList($OrderDataList)
    {
      $this->OrderDataList = $OrderDataList;
      return $this;
    }

}
