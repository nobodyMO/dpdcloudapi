<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class SearchAddressType
{

    /**
     * @var string $Street
     */
    protected $Street = null;

    /**
     * @var string $HouseNo
     */
    protected $HouseNo = null;

    /**
     * @var string $ZipCode
     */
    protected $ZipCode = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    
    public function __construct(array $searchAddress=null)
    {
		if (!is_null($searchAddress)) {	  
			if (isset ($searchAddress['Street'])) $this->Street = $searchAddress['Street'];
			if (isset ($searchAddress['HouseNo'])) $this->HouseNo = $searchAddress['HouseNo'];
			if (isset ($searchAddress['ZipCode'])) $this->ZipCode = $searchAddress['ZipCode'];
			if (isset ($searchAddress['City'])) $this->City = $searchAddress['City'];
			if (isset ($searchAddress['Country'])) $this->Country = $searchAddress['Country'];
		}
    
    }

    /**
     * @return string
     */
    public function getStreet()
    {
      return $this->Street;
    }

    /**
     * @param string $Street
     * @return \Zuckerwelt\Dpdcloudapi\Model\SearchAddressType
     */
    public function setStreet($Street)
    {
      $this->Street = $Street;
      return $this;
    }

    /**
     * @return string
     */
    public function getHouseNo()
    {
      return $this->HouseNo;
    }

    /**
     * @param string $HouseNo
     * @return \Zuckerwelt\Dpdcloudapi\Model\SearchAddressType
     */
    public function setHouseNo($HouseNo)
    {
      $this->HouseNo = $HouseNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
      return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     * @return \Zuckerwelt\Dpdcloudapi\Model\SearchAddressType
     */
    public function setZipCode($ZipCode)
    {
      $this->ZipCode = $ZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \Zuckerwelt\Dpdcloudapi\Model\SearchAddressType
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return \Zuckerwelt\Dpdcloudapi\Model\SearchAddressType
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

}
