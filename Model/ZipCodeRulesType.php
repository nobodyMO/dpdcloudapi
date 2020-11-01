<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class ZipCodeRulesType
{

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $ZipCode
     */
    protected $ZipCode = null;

    /**
     * @var string $NoPickupDays
     */
    protected $NoPickupDays = null;

    /**
     * @var string $ExpressCutOff
     */
    protected $ExpressCutOff = null;

    /**
     * @var string $ClassicCutOff
     */
    protected $ClassicCutOff = null;

    /**
     * @var string $PickupDepot
     */
    protected $PickupDepot = null;

    /**
     * @var string $State
     */
    protected $State = null;

    
    public function __construct()
    {
    
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\ZipCodeRulesType
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\ZipCodeRulesType
     */
    public function setZipCode($ZipCode)
    {
      $this->ZipCode = $ZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getNoPickupDays()
    {
      return $this->NoPickupDays;
    }

    /**
     * @param string $NoPickupDays
     * @return \Zuckerwelt\Dpdcloudapi\Model\ZipCodeRulesType
     */
    public function setNoPickupDays($NoPickupDays)
    {
      $this->NoPickupDays = $NoPickupDays;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpressCutOff()
    {
      return $this->ExpressCutOff;
    }

    /**
     * @param string $ExpressCutOff
     * @return \Zuckerwelt\Dpdcloudapi\Model\ZipCodeRulesType
     */
    public function setExpressCutOff($ExpressCutOff)
    {
      $this->ExpressCutOff = $ExpressCutOff;
      return $this;
    }

    /**
     * @return string
     */
    public function getClassicCutOff()
    {
      return $this->ClassicCutOff;
    }

    /**
     * @param string $ClassicCutOff
     * @return \Zuckerwelt\Dpdcloudapi\Model\ZipCodeRulesType
     */
    public function setClassicCutOff($ClassicCutOff)
    {
      $this->ClassicCutOff = $ClassicCutOff;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupDepot()
    {
      return $this->PickupDepot;
    }

    /**
     * @param string $PickupDepot
     * @return \Zuckerwelt\Dpdcloudapi\Model\ZipCodeRulesType
     */
    public function setPickupDepot($PickupDepot)
    {
      $this->PickupDepot = $PickupDepot;
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\ZipCodeRulesType
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

}
