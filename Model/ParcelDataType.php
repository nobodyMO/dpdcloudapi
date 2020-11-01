<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;
use Zuckerwelt\Dpdcloudapi\CODType;
class ParcelDataType
{

    /**
     * @var ShipServiceType $ShipService
     */
    protected $ShipService = null;

    /**
     * @var float $Weight
     */
    protected $Weight = null;

    /**
     * @var string $Content
     */
    protected $Content = null;

    /**
     * @var string $YourInternalID
     */
    protected $YourInternalID = null;

    /**
     * @var string $Reference1
     */
    protected $Reference1 = null;

    /**
     * @var string $Reference2
     */
    protected $Reference2 = null;

    /**
     * @var CODType $COD
     */
    protected $COD = null;

    /**
     * @param ShipServiceType $ShipService
     * @param float $Weight
     */
    public function __construct(array $parcelData)
    {
		if (!is_null($parcelData)) {	  
			if (isset ($parcelData['ShipService'])) $this->ShipService = $parcelData['ShipService'];
			if (isset ($parcelData['Weight'])) $this->Weight = $parcelData['Weight'];
			if (isset ($parcelData['Content'])) $this->Content = $parcelData['Content'];
			if (isset ($parcelData['YourInternalID'])) $this->YourInternalID = $parcelData['YourInternalID'];
			if (isset ($parcelData['Reference1'])) $this->Reference1 = $parcelData['Reference1'];
			if (isset ($parcelData['Reference2'])) $this->Reference2 = $parcelData['Reference2'];
			if (isset ($parcelData['COD'])) $this->COD = new CODType ($parcelData['COD']);
		}		
    }

    /**
     * @return ShipServiceType
     */
    public function getShipService()
    {
      return $this->ShipService;
    }

    /**
     * @param ShipServiceType $ShipService
     * @return \Zuckerwelt\Dpdcloudapi\Model\ParcelDataType
     */
    public function setShipService($ShipService)
    {
      $this->ShipService = $ShipService;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param float $Weight
     * @return \Zuckerwelt\Dpdcloudapi\Model\ParcelDataType
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param string $Content
     * @return \Zuckerwelt\Dpdcloudapi\Model\ParcelDataType
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

    /**
     * @return string
     */
    public function getYourInternalID()
    {
      return $this->YourInternalID;
    }

    /**
     * @param string $YourInternalID
     * @return \Zuckerwelt\Dpdcloudapi\Model\ParcelDataType
     */
    public function setYourInternalID($YourInternalID)
    {
      $this->YourInternalID = $YourInternalID;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference1()
    {
      return $this->Reference1;
    }

    /**
     * @param string $Reference1
     * @return \Zuckerwelt\Dpdcloudapi\Model\ParcelDataType
     */
    public function setReference1($Reference1)
    {
      $this->Reference1 = $Reference1;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference2()
    {
      return $this->Reference2;
    }

    /**
     * @param string $Reference2
     * @return \Zuckerwelt\Dpdcloudapi\Model\ParcelDataType
     */
    public function setReference2($Reference2)
    {
      $this->Reference2 = $Reference2;
      return $this;
    }

    /**
     * @return CODType
     */
    public function getCOD()
    {
      return $this->COD;
    }

    /**
     * @param CODType $COD
     * @return \Zuckerwelt\Dpdcloudapi\Model\ParcelDataType
     */
    public function setCOD($COD)
    {
      $this->COD = $COD;
      return $this;
    }

}
