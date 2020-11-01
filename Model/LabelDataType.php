<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class LabelDataType
{

    /**
     * @var string $YourInternalID
     */
    public $YourInternalID = null;

    /**
     * @var string $ParcelNo
     */
    public $ParcelNo = null;

    
    public function __construct()
    {
    
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\LabelDataType
     */
    public function setYourInternalID($YourInternalID)
    {
      $this->YourInternalID = $YourInternalID;
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\LabelDataType
     */
    public function setParcelNo($ParcelNo)
    {
      $this->ParcelNo = $ParcelNo;
      return $this;
    }

}
