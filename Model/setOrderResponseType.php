<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class setOrderResponseType
{

    /**
     * @var int $Version
     */
    public $Version = null;

    /**
     * @var string $Language
     */
    public $Language = null;

    /**
     * @var boolean $Ack
     */
    public $Ack = null;

    /**
     * @var \DateTime $TimeStamp
     */
    public $TimeStamp = null;

    /**
     * @var LabelResponseType $LabelResponse
     */
    public $LabelResponse = null;

    /**
     * @var string $SystemInformation
     */
    public $SystemInformation = null;

    /**
     * @var ArrayOfErrorDataType $ErrorDataList
     */
    public $ErrorDataList = null;

    /**
     * @param int $Version
     * @param boolean $Ack
     * @param \DateTime $TimeStamp
     */
    public function __construct($Version = null, $Ack = null, \DateTime $TimeStamp = null)
    {
      $this->Version = $Version;
      $this->Ack = $Ack;
      $this->TimeStamp = $TimeStamp ? $TimeStamp->format(\DateTime::ATOM) : null;
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\setOrderResponseType
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\setOrderResponseType
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\setOrderResponseType
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\setOrderResponseType
     */
    public function setTimeStamp(\DateTime $TimeStamp)
    {
      $this->TimeStamp = $TimeStamp->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return LabelResponseType
     */
    public function getLabelResponse()
    {
      return $this->LabelResponse;
    }

    /**
     * @param LabelResponseType $LabelResponse
     * @return \Zuckerwelt\Dpdcloudapi\Model\setOrderResponseType
     */
    public function setLabelResponse($LabelResponse)
    {
      $this->LabelResponse = $LabelResponse;
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\setOrderResponseType
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
     * @return ErrorData [];
     */
    public function getErrorData()
	{
	return $this->ErrorDataList->getErrorDataType();
	}


    /**
     * @param ArrayOfErrorDataType $ErrorDataList
     * @return \Zuckerwelt\Dpdcloudapi\Model\setOrderResponseType
     */
    public function setErrorDataList($ErrorDataList)
    {
      $this->ErrorDataList = $ErrorDataList;
      return $this;
    }

}
