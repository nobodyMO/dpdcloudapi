<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class getZipCodeRulesResponse
{

    /**
     * @var getZipCodeRulesResponseType $getZipCodeRulesResult
     */
    protected $getZipCodeRulesResult = null;

    /**
     * @param getZipCodeRulesResponseType $getZipCodeRulesResult
     */
    public function __construct($getZipCodeRulesResult = null)
    {
      $this->getZipCodeRulesResult = $getZipCodeRulesResult;
    }

    /**
     * @return getZipCodeRulesResponseType
     */
    public function getGetZipCodeRulesResult()
    {
      return $this->getZipCodeRulesResult;
    }

    /**
     * @param getZipCodeRulesResponseType $getZipCodeRulesResult
     * @return \Zuckerwelt\Dpdcloudapi\Model\getZipCodeRulesResponse
     */
    public function setGetZipCodeRulesResult($getZipCodeRulesResult)
    {
      $this->getZipCodeRulesResult = $getZipCodeRulesResult;
      return $this;
    }

}
