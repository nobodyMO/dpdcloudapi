<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class getZipCodeRules
{

    /**
     * @var getZipCodeRulesRequestType $getZipCodeRulesRequest
     */
    protected $getZipCodeRulesRequest = null;

    /**
     * @param getZipCodeRulesRequestType $getZipCodeRulesRequest
     */
    public function __construct($getZipCodeRulesRequest = null)
    {
      $this->getZipCodeRulesRequest = $getZipCodeRulesRequest;
    }

    /**
     * @return getZipCodeRulesRequestType
     */
    public function getGetZipCodeRulesRequest()
    {
      return $this->getZipCodeRulesRequest;
    }

    /**
     * @param getZipCodeRulesRequestType $getZipCodeRulesRequest
     * @return \Zuckerwelt\Dpdcloudapi\Model\getZipCodeRules
     */
    public function setGetZipCodeRulesRequest($getZipCodeRulesRequest)
    {
      $this->getZipCodeRulesRequest = $getZipCodeRulesRequest;
      return $this;
    }

}
