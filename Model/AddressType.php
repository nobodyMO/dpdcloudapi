<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class AddressType
{

    /**
     * @var string $Company
     */
    protected $Company = null;

    /**
     * @var string $Salutation
     */
    protected $Salutation = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $Street
     */
    protected $Street;

    /**
     * @var string $HouseNo
     */
    protected $HouseNo;

    /**
     * @var string $Country
     */
    protected $Country;

    /**
     * @var string $ZipCode
     */
    protected $ZipCode;

    /**
     * @var string $City
     */
    protected $City;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $Phone
     */
    protected $Phone = null;

    /**
     * @var string $Mail
     */
    protected $Mail = null;

    /**
     * @var string $Gender
     */
    protected $Gender = null;

    
    public function __construct(array $address=null)
    {
		if (!is_null($address)) {	  
			if (isset ($address['Company'])) $this->Company = $address['Company'];
			if (isset ($address['Salutation'])) $this->Salutation = $address['Salutation'];
			if (isset ($address['Name'])) $this->Name = $address['Name'];
			if (isset ($address['FirstName'])) $this->FirstName = $address['FirstName'];
			if (isset ($address['LastName'])) $this->LastName = $address['LastName'];
			if (isset ($address['Street'])) $this->Street = $address['Street'];
			if (isset ($address['HouseNo'])) $this->HouseNo = $address['HouseNo'];
			if (isset ($address['Country'])) $this->Country = $address['Country'];
			if (isset ($address['ZipCode'])) $this->ZipCode = $address['ZipCode'];
			if (isset ($address['City'])) $this->City = $address['City'];
			if (isset ($address['State'])) $this->State = $address['State'];
			if (isset ($address['Phone'])) $this->Phone = $address['Phone'];
			if (isset ($address['Mail'])) $this->Mail = $address['Mail'];
			if (isset ($address['Gender'])) $this->Gender = $address['Gender'];
		}	
    }

    /**
     * @return string
     */
    public function getCompany()
    {
      return $this->Company;
    }

    /**
     * @param string $Company
     * @return \Zuckerwelt\Dpdcloudapi\Model\AddressType
     */
    public function setCompany($Company)
    {
      $this->Company = $Company;
      return $this;
    }

    /**
     * @return string
     */
    public function getSalutation()
    {
      return $this->Salutation;
    }

    /**
     * @param string $Salutation
     * @return \Zuckerwelt\Dpdcloudapi\Model\AddressType
     */
    public function setSalutation($Salutation)
    {
      $this->Salutation = $Salutation;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Zuckerwelt\Dpdcloudapi\Model\AddressType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \Zuckerwelt\Dpdcloudapi\Model\AddressType
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \Zuckerwelt\Dpdcloudapi\Model\AddressType
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\AddressType
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\AddressType
     */
    public function setHouseNo($HouseNo)
    {
      $this->HouseNo = $HouseNo;
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\AddressType
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\AddressType
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\AddressType
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param string $State
     * @return \Zuckerwelt\Dpdcloudapi\Model\AddressType
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return \Zuckerwelt\Dpdcloudapi\Model\AddressType
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return string
     */
    public function getMail()
    {
      return $this->Mail;
    }

    /**
     * @param string $Mail
     * @return \Zuckerwelt\Dpdcloudapi\Model\AddressType
     */
    public function setMail($Mail)
    {
      $this->Mail = $Mail;
      return $this;
    }

    /**
     * @return string
     */
    public function getGender()
    {
      return $this->Gender;
    }

    /**
     * @param string $Gender
     * @return \Zuckerwelt\Dpdcloudapi\Model\AddressType
     */
    public function setGender($Gender)
    {
      $this->Gender = $Gender;
      return $this;
    }

}
