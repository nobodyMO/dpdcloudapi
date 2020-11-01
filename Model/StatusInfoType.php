<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class StatusInfoType
{

    /**
     * @var boolean $StatusReached
     */
    protected $StatusReached = null;

    /**
     * @var string $StatusID
     */
    protected $StatusID = null;

    /**
     * @var string $Headline
     */
    protected $Headline = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $StatusText_Mobile
     */
    protected $StatusText_Mobile = null;

    /**
     * @var string $StatusText_Desktop
     */
    protected $StatusText_Desktop = null;

    /**
     * @var string $StatusDate
     */
    protected $StatusDate = null;

    /**
     * @var DepotDataType $DepotData
     */
    protected $DepotData = null;

    /**
     * @param boolean $StatusReached
     */
    public function __construct($StatusReached = null)
    {
      $this->StatusReached = $StatusReached;
    }

    /**
     * @return boolean
     */
    public function getStatusReached()
    {
      return $this->StatusReached;
    }

    /**
     * @param boolean $StatusReached
     * @return \Zuckerwelt\Dpdcloudapi\Model\StatusInfoType
     */
    public function setStatusReached($StatusReached)
    {
      $this->StatusReached = $StatusReached;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusID()
    {
      return $this->StatusID;
    }

    /**
     * @param string $StatusID
     * @return \Zuckerwelt\Dpdcloudapi\Model\StatusInfoType
     */
    public function setStatusID($StatusID)
    {
      $this->StatusID = $StatusID;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeadline()
    {
      return $this->Headline;
    }

    /**
     * @param string $Headline
     * @return \Zuckerwelt\Dpdcloudapi\Model\StatusInfoType
     */
    public function setHeadline($Headline)
    {
      $this->Headline = $Headline;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Zuckerwelt\Dpdcloudapi\Model\StatusInfoType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusText_Mobile()
    {
      return $this->StatusText_Mobile;
    }

    /**
     * @param string $StatusText_Mobile
     * @return \Zuckerwelt\Dpdcloudapi\Model\StatusInfoType
     */
    public function setStatusText_Mobile($StatusText_Mobile)
    {
      $this->StatusText_Mobile = $StatusText_Mobile;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusText_Desktop()
    {
      return $this->StatusText_Desktop;
    }

    /**
     * @param string $StatusText_Desktop
     * @return \Zuckerwelt\Dpdcloudapi\Model\StatusInfoType
     */
    public function setStatusText_Desktop($StatusText_Desktop)
    {
      $this->StatusText_Desktop = $StatusText_Desktop;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusDate()
    {
      return $this->StatusDate;
    }

    /**
     * @param string $StatusDate
     * @return \Zuckerwelt\Dpdcloudapi\Model\StatusInfoType
     */
    public function setStatusDate($StatusDate)
    {
      $this->StatusDate = $StatusDate;
      return $this;
    }

    /**
     * @return DepotDataType
     */
    public function getDepotData()
    {
      return $this->DepotData;
    }

    /**
     * @param DepotDataType $DepotData
     * @return \Zuckerwelt\Dpdcloudapi\Model\StatusInfoType
     */
    public function setDepotData($DepotData)
    {
      $this->DepotData = $DepotData;
      return $this;
    }

}
