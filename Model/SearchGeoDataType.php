<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class SearchGeoDataType
{

    /**
     * @var float $Longitude
     */
    protected $Longitude = null;

    /**
     * @var float $Latitude
     */
    protected $Latitude = null;

    /**
     * @param float $Longitude
     * @param float $Latitude
     */
    public function __construct(array$searchGeoData = null)
    {
		if (!is_null($searchGeoData)) {	  
			if (isset ($searchGeoData['Longitude'])) $this->Longitude = $searchGeoData['Longitude'];
			if (isset ($searchGeoData['Latitude'])) $this->Latitude = $searchGeoData['Latitude'];
		}		
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\SearchGeoDataType
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\SearchGeoDataType
     */
    public function setLatitude($Latitude)
    {
      $this->Latitude = $Latitude;
      return $this;
    }

}
