<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class OrderInformationType
{

    /**
     * @var string $ParcelNo
     */
    protected $ParcelNo = null;

    /**
     * @var string $MPSID
     */
    protected $MPSID = null;

    /**
     * @var int $ServiceCode
     */
    protected $ServiceCode = null;

    /**
     * @var string $ProductName
     */
    protected $ProductName = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @var string $Weight
     */
    protected $Weight = null;

    /**
     * @var string $CODAmount
     */
    protected $CODAmount = null;

    /**
     * @var int $Collis
     */
    protected $Collis = null;

    /**
     * @var string $ParcelNoList
     */
    protected $ParcelNoList = null;

    /**
     * @var boolean $CompleteDelivery
     */
    protected $CompleteDelivery = null;

    /**
     * @var string $ReceiverName
     */
    protected $ReceiverName = null;

    /**
     * @var string $SenderName
     */
    protected $SenderName = null;

    /**
     * @var string $EstimatedDeliveryTime
     */
    protected $EstimatedDeliveryTime = null;

    /**
     * @param int $ServiceCode
     * @param int $Collis
     * @param boolean $CompleteDelivery
     */
    public function __construct($ServiceCode = null, $Collis = null, $CompleteDelivery = null)
    {
      $this->ServiceCode = $ServiceCode;
      $this->Collis = $Collis;
      $this->CompleteDelivery = $CompleteDelivery;
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\OrderInformationType
     */
    public function setParcelNo($ParcelNo)
    {
      $this->ParcelNo = $ParcelNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getMPSID()
    {
      return $this->MPSID;
    }

    /**
     * @param string $MPSID
     * @return \Zuckerwelt\Dpdcloudapi\Model\OrderInformationType
     */
    public function setMPSID($MPSID)
    {
      $this->MPSID = $MPSID;
      return $this;
    }

    /**
     * @return int
     */
    public function getServiceCode()
    {
      return $this->ServiceCode;
    }

    /**
     * @param int $ServiceCode
     * @return \Zuckerwelt\Dpdcloudapi\Model\OrderInformationType
     */
    public function setServiceCode($ServiceCode)
    {
      $this->ServiceCode = $ServiceCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
      return $this->ProductName;
    }

    /**
     * @param string $ProductName
     * @return \Zuckerwelt\Dpdcloudapi\Model\OrderInformationType
     */
    public function setProductName($ProductName)
    {
      $this->ProductName = $ProductName;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return \Zuckerwelt\Dpdcloudapi\Model\OrderInformationType
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param string $Weight
     * @return \Zuckerwelt\Dpdcloudapi\Model\OrderInformationType
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return string
     */
    public function getCODAmount()
    {
      return $this->CODAmount;
    }

    /**
     * @param string $CODAmount
     * @return \Zuckerwelt\Dpdcloudapi\Model\OrderInformationType
     */
    public function setCODAmount($CODAmount)
    {
      $this->CODAmount = $CODAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getCollis()
    {
      return $this->Collis;
    }

    /**
     * @param int $Collis
     * @return \Zuckerwelt\Dpdcloudapi\Model\OrderInformationType
     */
    public function setCollis($Collis)
    {
      $this->Collis = $Collis;
      return $this;
    }

    /**
     * @return string
     */
    public function getParcelNoList()
    {
      return $this->ParcelNoList;
    }

    /**
     * @param string $ParcelNoList
     * @return \Zuckerwelt\Dpdcloudapi\Model\OrderInformationType
     */
    public function setParcelNoList($ParcelNoList)
    {
      $this->ParcelNoList = $ParcelNoList;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCompleteDelivery()
    {
      return $this->CompleteDelivery;
    }

    /**
     * @param boolean $CompleteDelivery
     * @return \Zuckerwelt\Dpdcloudapi\Model\OrderInformationType
     */
    public function setCompleteDelivery($CompleteDelivery)
    {
      $this->CompleteDelivery = $CompleteDelivery;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceiverName()
    {
      return $this->ReceiverName;
    }

    /**
     * @param string $ReceiverName
     * @return \Zuckerwelt\Dpdcloudapi\Model\OrderInformationType
     */
    public function setReceiverName($ReceiverName)
    {
      $this->ReceiverName = $ReceiverName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderName()
    {
      return $this->SenderName;
    }

    /**
     * @param string $SenderName
     * @return \Zuckerwelt\Dpdcloudapi\Model\OrderInformationType
     */
    public function setSenderName($SenderName)
    {
      $this->SenderName = $SenderName;
      return $this;
    }

    /**
     * @return string
     */
    public function getEstimatedDeliveryTime()
    {
      return $this->EstimatedDeliveryTime;
    }

    /**
     * @param string $EstimatedDeliveryTime
     * @return \Zuckerwelt\Dpdcloudapi\Model\OrderInformationType
     */
    public function setEstimatedDeliveryTime($EstimatedDeliveryTime)
    {
      $this->EstimatedDeliveryTime = $EstimatedDeliveryTime;
      return $this;
    }

}
