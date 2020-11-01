<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class GeoDataType
{

    /**
     * @var float $Distance
     */
    protected $Distance = null;

    /**
     * @var float $Longitude
     */
    protected $Longitude = null;

    /**
     * @var float $Latitude
     */
    protected $Latitude = null;

    /**
     * @var float $CoordinateX
     */
    protected $CoordinateX = null;

    /**
     * @var float $CoordinateY
     */
    protected $CoordinateY = null;

    /**
     * @var float $CoordinateZ
     */
    protected $CoordinateZ = null;

    /**
     * @param float $Distance
     * @param float $Longitude
     * @param float $Latitude
     * @param float $CoordinateX
     * @param float $CoordinateY
     * @param float $CoordinateZ
     */
    public function __construct($Distance = null, $Longitude = null, $Latitude = null, $CoordinateX = null, $CoordinateY = null, $CoordinateZ = null)
    {
      $this->Distance = $Distance;
      $this->Longitude = $Longitude;
      $this->Latitude = $Latitude;
      $this->CoordinateX = $CoordinateX;
      $this->CoordinateY = $CoordinateY;
      $this->CoordinateZ = $CoordinateZ;
    }

    /**
     * @return float
     */
    public function getDistance()
    {
      return $this->Distance;
    }

    /**
     * @param float $Distance
     * @return \Zuckerwelt\Dpdcloudapi\Model\GeoDataType
     */
    public function setDistance($Distance)
    {
      $this->Distance = $Distance;
      return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
      return $this->Longitude;
    }

    /**
     * @param float $Longitude
     * @return \Zuckerwelt\Dpdcloudapi\Model\GeoDataType
     */
    public function setLongitude($Longitude)
    {
      $this->Longitude = $Longitude;
      return $this;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
      return $this->Latitude;
    }

    /**
     * @param float $Latitude
     * @return \Zuckerwelt\Dpdcloudapi\Model\GeoDataType
     */
    public function setLatitude($Latitude)
    {
      $this->Latitude = $Latitude;
      return $this;
    }

    /**
     * @return float
     */
    public function getCoordinateX()
    {
      return $this->CoordinateX;
    }

    /**
     * @param float $CoordinateX
     * @return \Zuckerwelt\Dpdcloudapi\Model\GeoDataType
     */
    public function setCoordinateX($CoordinateX)
    {
      $this->CoordinateX = $CoordinateX;
      return $this;
    }

    /**
     * @return float
     */
    public function getCoordinateY()
    {
      return $this->CoordinateY;
    }

    /**
     * @param float $CoordinateY
     * @return \Zuckerwelt\Dpdcloudapi\Model\GeoDataType
     */
    public function setCoordinateY($CoordinateY)
    {
      $this->CoordinateY = $CoordinateY;
      return $this;
    }

    /**
     * @return float
     */
    public function getCoordinateZ()
    {
      return $this->CoordinateZ;
    }

    /**
     * @param float $CoordinateZ
     * @return \Zuckerwelt\Dpdcloudapi\Model\GeoDataType
     */
    public function setCoordinateZ($CoordinateZ)
    {
      $this->CoordinateZ = $CoordinateZ;
      return $this;
    }

}
