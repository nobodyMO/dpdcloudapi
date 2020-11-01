<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class ShipmentInfo extends StatusInfo
{

    /**
     * @var ContentItem $receiver
     */
    protected $receiver = null;

    /**
     * @var ContentItem $predictInformation
     */
    protected $predictInformation = null;

    /**
     * @var ContentItem $serviceDescription
     */
    protected $serviceDescription = null;

    /**
     * @var ContentItem $additionalServiceElements
     */
    protected $additionalServiceElements = null;

    /**
     * @var TrackingProperty[] $trackingProperty
     */
    protected $trackingProperty = null;

    /**
     * @param status $status
     * @param boolean $statusHasBeenReached
     * @param boolean $isCurrentStatus
     * @param boolean $showContactInfo
     */
    public function __construct($status = null, $statusHasBeenReached = null, $isCurrentStatus = null, $showContactInfo = null)
    {
      parent::__construct($status, $statusHasBeenReached, $isCurrentStatus, $showContactInfo);
    }

    /**
     * @return ContentItem
     */
    public function getReceiver()
    {
      return $this->receiver;
    }

    /**
     * @param ContentItem $receiver
     * @return \Zuckerwelt\Dpdcloudapi\Model\ShipmentInfo
     */
    public function setReceiver($receiver)
    {
      $this->receiver = $receiver;
      return $this;
    }

    /**
     * @return ContentItem
     */
    public function getPredictInformation()
    {
      return $this->predictInformation;
    }

    /**
     * @param ContentItem $predictInformation
     * @return \Zuckerwelt\Dpdcloudapi\Model\ShipmentInfo
     */
    public function setPredictInformation($predictInformation)
    {
      $this->predictInformation = $predictInformation;
      return $this;
    }

    /**
     * @return ContentItem
     */
    public function getServiceDescription()
    {
      return $this->serviceDescription;
    }

    /**
     * @param ContentItem $serviceDescription
     * @return \Zuckerwelt\Dpdcloudapi\Model\ShipmentInfo
     */
    public function setServiceDescription($serviceDescription)
    {
      $this->serviceDescription = $serviceDescription;
      return $this;
    }

    /**
     * @return ContentItem
     */
    public function getAdditionalServiceElements()
    {
      return $this->additionalServiceElements;
    }

    /**
     * @param ContentItem $additionalServiceElements
     * @return \Zuckerwelt\Dpdcloudapi\Model\ShipmentInfo
     */
    public function setAdditionalServiceElements($additionalServiceElements)
    {
      $this->additionalServiceElements = $additionalServiceElements;
      return $this;
    }

    /**
     * @return TrackingProperty[]
     */
    public function getTrackingProperty()
    {
      return $this->trackingProperty;
    }

    /**
     * @param TrackingProperty[] $trackingProperty
     * @return \Zuckerwelt\Dpdcloudapi\Model\ShipmentInfo
     */
    public function setTrackingProperty(array $trackingProperty = null)
    {
      $this->trackingProperty = $trackingProperty;
      return $this;
    }

}
