<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class getParcelLifeCycleRequestType
{

    /**
     * @var int $Version
     */
    protected $Version = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @var PartnerCredentialType $PartnerCredentials
     */
    protected $PartnerCredentials = null;

    /**
     * @var UserCredentialType $UserCredentials
     */
    protected $UserCredentials = null;

    /**
     * @var string $ParcelNo
     */
    protected $ParcelNo = null;

    /**
     * @param int $Version
     */
    public function __construct($Version = null)
    {
      $this->Version = $Version;
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelLifeCycleRequestType
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelLifeCycleRequestType
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelLifeCycleRequestType
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelLifeCycleRequestType
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelLifeCycleRequestType
     */
    public function setParcelNo($ParcelNo)
    {
      $this->ParcelNo = $ParcelNo;
      return $this;
    }

}
