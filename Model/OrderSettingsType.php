<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class OrderSettingsType
{

    /**
     * @var \DateTime $ShipDate
     */
    protected $ShipDate = null;

    /**
     * @var LabelSizeType $LabelSize
     */
    protected $LabelSize = null;

    /**
     * @var LabelStartPositionType $LabelStartPosition
     */
    protected $LabelStartPosition = null;

    /**
     * @param \DateTime $ShipDate
     * @param LabelSizeType $LabelSize
     * @param LabelStartPositionType $LabelStartPosition
     */
    public function __construct(\DateTime $ShipDate = null, $LabelSize = null, $LabelStartPosition = null)
    {
      $this->ShipDate = $ShipDate ? $ShipDate->format(\DateTime::ATOM) : null;
      $this->LabelSize = $LabelSize;
      $this->LabelStartPosition = $LabelStartPosition;
    }

    /**
     * @return \DateTime
     */
    public function getShipDate()
    {
      if ($this->ShipDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ShipDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ShipDate
     * @return \Zuckerwelt\Dpdcloudapi\Model\OrderSettingsType
     */
    public function setShipDate(\DateTime $ShipDate)
    {
      $this->ShipDate = $ShipDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return LabelSizeType
     */
    public function getLabelSize()
    {
      return $this->LabelSize;
    }

    /**
     * @param LabelSizeType $LabelSize
     * @return \Zuckerwelt\Dpdcloudapi\Model\OrderSettingsType
     */
    public function setLabelSize($LabelSize)
    {
      $this->LabelSize = $LabelSize;
      return $this;
    }

    /**
     * @return LabelStartPositionType
     */
    public function getLabelStartPosition()
    {
      return $this->LabelStartPosition;
    }

    /**
     * @param LabelStartPositionType $LabelStartPosition
     * @return \Zuckerwelt\Dpdcloudapi\Model\OrderSettingsType
     */
    public function setLabelStartPosition($LabelStartPosition)
    {
      $this->LabelStartPosition = $LabelStartPosition;
      return $this;
    }

}
