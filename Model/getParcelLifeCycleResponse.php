<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class getParcelLifeCycleResponse
{

    /**
     * @var getParcelLifeCycleResponseType $getParcelLifeCycleResult
     */
    protected $getParcelLifeCycleResult = null;

    /**
     * @param getParcelLifeCycleResponseType $getParcelLifeCycleResult
     */
    public function __construct($getParcelLifeCycleResult = null)
    {
      $this->getParcelLifeCycleResult = $getParcelLifeCycleResult;
    }

    /**
     * @return getParcelLifeCycleResponseType
     */
    public function getGetParcelLifeCycleResult()
    {
      return $this->getParcelLifeCycleResult;
    }

    /**
     * @param getParcelLifeCycleResponseType $getParcelLifeCycleResult
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelLifeCycleResponse
     */
    public function setGetParcelLifeCycleResult($getParcelLifeCycleResult)
    {
      $this->getParcelLifeCycleResult = $getParcelLifeCycleResult;
      return $this;
    }

}
