<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class getParcelShopFinderResponseType
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
     * @var boolean $Ack
     */
    protected $Ack = null;

    /**
     * @var \DateTime $TimeStamp
     */
    protected $TimeStamp = null;

    /**
     * @var int $ResultCounter
     */
    protected $ResultCounter = null;

    /**
     * @var ArrayOfParcelShopType $ParcelShopList
     */
    protected $ParcelShopList = null;

    /**
     * @var string $SystemInformation
     */
    protected $SystemInformation = null;

    /**
     * @var ArrayOfErrorDataType $ErrorDataList
     */
    protected $ErrorDataList = null;

    /**
     * @param int $Version
     * @param boolean $Ack
     * @param \DateTime $TimeStamp
     * @param int $ResultCounter
     */
    public function __construct($Version = null, $Ack = null, \DateTime $TimeStamp = null, $ResultCounter = null)
    {
      $this->Version = $Version;
      $this->Ack = $Ack;
      $this->TimeStamp = $TimeStamp ? $TimeStamp->format(\DateTime::ATOM) : null;
      $this->ResultCounter = $ResultCounter;
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelShopFinderResponseType
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelShopFinderResponseType
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAck()
    {
      return $this->Ack;
    }

    /**
     * @param boolean $Ack
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelShopFinderResponseType
     */
    public function setAck($Ack)
    {
      $this->Ack = $Ack;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimeStamp()
    {
      if ($this->TimeStamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TimeStamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TimeStamp
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelShopFinderResponseType
     */
    public function setTimeStamp(\DateTime $TimeStamp)
    {
      $this->TimeStamp = $TimeStamp->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getResultCounter()
    {
      return $this->ResultCounter;
    }

    /**
     * @param int $ResultCounter
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelShopFinderResponseType
     */
    public function setResultCounter($ResultCounter)
    {
      $this->ResultCounter = $ResultCounter;
      return $this;
    }

    /**
     * @return ArrayOfParcelShopType
     */
    public function getParcelShopList()
    {
      return $this->ParcelShopList;
    }

    /**
     * @param ArrayOfParcelShopType $ParcelShopList
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelShopFinderResponseType
     */
    public function setParcelShopList($ParcelShopList)
    {
      $this->ParcelShopList = $ParcelShopList;
      return $this;
    }

    /**
     * @return string
     */
    public function getSystemInformation()
    {
      return $this->SystemInformation;
    }

    /**
     * @param string $SystemInformation
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelShopFinderResponseType
     */
    public function setSystemInformation($SystemInformation)
    {
      $this->SystemInformation = $SystemInformation;
      return $this;
    }

    /**
     * @return ArrayOfErrorDataType
     */
    public function getErrorDataList()
    {
      return $this->ErrorDataList;
    }

    /**
     * @param ArrayOfErrorDataType $ErrorDataList
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelShopFinderResponseType
     */
    public function setErrorDataList($ErrorDataList)
    {
      $this->ErrorDataList = $ErrorDataList;
      return $this;
    }

}
