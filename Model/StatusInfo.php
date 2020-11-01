<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class StatusInfo
{

    /**
     * @var status $status
     */
    protected $status = null;

    /**
     * @var ContentLine $label
     */
    protected $label = null;

    /**
     * @var ContentItem $description
     */
    protected $description = null;

    /**
     * @var boolean $statusHasBeenReached
     */
    protected $statusHasBeenReached = null;

    /**
     * @var boolean $isCurrentStatus
     */
    protected $isCurrentStatus = null;

    /**
     * @var boolean $showContactInfo
     */
    protected $showContactInfo = null;

    /**
     * @var ContentLine $location
     */
    protected $location = null;

    /**
     * @var ContentLine $date
     */
    protected $date = null;

    /**
     * @var ContentItem[] $normalItems
     */
    protected $normalItems = null;

    /**
     * @var ContentItem[] $importantItems
     */
    protected $importantItems = null;

    /**
     * @var ContentItem[] $errorItems
     */
    protected $errorItems = null;

    /**
     * @param status $status
     * @param boolean $statusHasBeenReached
     * @param boolean $isCurrentStatus
     * @param boolean $showContactInfo
     */
    public function __construct($status = null, $statusHasBeenReached = null, $isCurrentStatus = null, $showContactInfo = null)
    {
      $this->status = $status;
      $this->statusHasBeenReached = $statusHasBeenReached;
      $this->isCurrentStatus = $isCurrentStatus;
      $this->showContactInfo = $showContactInfo;
    }

    /**
     * @return status
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param status $status
     * @return \Zuckerwelt\Dpdcloudapi\Model\StatusInfo
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return ContentLine
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param ContentLine $label
     * @return \Zuckerwelt\Dpdcloudapi\Model\StatusInfo
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return ContentItem
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param ContentItem $description
     * @return \Zuckerwelt\Dpdcloudapi\Model\StatusInfo
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStatusHasBeenReached()
    {
      return $this->statusHasBeenReached;
    }

    /**
     * @param boolean $statusHasBeenReached
     * @return \Zuckerwelt\Dpdcloudapi\Model\StatusInfo
     */
    public function setStatusHasBeenReached($statusHasBeenReached)
    {
      $this->statusHasBeenReached = $statusHasBeenReached;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCurrentStatus()
    {
      return $this->isCurrentStatus;
    }

    /**
     * @param boolean $isCurrentStatus
     * @return \Zuckerwelt\Dpdcloudapi\Model\StatusInfo
     */
    public function setIsCurrentStatus($isCurrentStatus)
    {
      $this->isCurrentStatus = $isCurrentStatus;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowContactInfo()
    {
      return $this->showContactInfo;
    }

    /**
     * @param boolean $showContactInfo
     * @return \Zuckerwelt\Dpdcloudapi\Model\StatusInfo
     */
    public function setShowContactInfo($showContactInfo)
    {
      $this->showContactInfo = $showContactInfo;
      return $this;
    }

    /**
     * @return ContentLine
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param ContentLine $location
     * @return \Zuckerwelt\Dpdcloudapi\Model\StatusInfo
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return ContentLine
     */
    public function getDate()
    {
      return $this->date;
    }

    /**
     * @param ContentLine $date
     * @return \Zuckerwelt\Dpdcloudapi\Model\StatusInfo
     */
    public function setDate($date)
    {
      $this->date = $date;
      return $this;
    }

    /**
     * @return ContentItem[]
     */
    public function getNormalItems()
    {
      return $this->normalItems;
    }

    /**
     * @param ContentItem[] $normalItems
     * @return \Zuckerwelt\Dpdcloudapi\Model\StatusInfo
     */
    public function setNormalItems(array $normalItems = null)
    {
      $this->normalItems = $normalItems;
      return $this;
    }

    /**
     * @return ContentItem[]
     */
    public function getImportantItems()
    {
      return $this->importantItems;
    }

    /**
     * @param ContentItem[] $importantItems
     * @return \Zuckerwelt\Dpdcloudapi\Model\StatusInfo
     */
    public function setImportantItems(array $importantItems = null)
    {
      $this->importantItems = $importantItems;
      return $this;
    }

    /**
     * @return ContentItem[]
     */
    public function getErrorItems()
    {
      return $this->errorItems;
    }

    /**
     * @param ContentItem[] $errorItems
     * @return \Zuckerwelt\Dpdcloudapi\Model\StatusInfo
     */
    public function setErrorItems(array $errorItems = null)
    {
      $this->errorItems = $errorItems;
      return $this;
    }

}
