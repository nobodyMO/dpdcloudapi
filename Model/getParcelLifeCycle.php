<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class getParcelLifeCycle
{

    /**
     * @var getParcelLifeCycleRequestType $getParcelLifeCycleRequest
     */
    protected $getParcelLifeCycleRequest = null;

    /**
     * @param getParcelLifeCycleRequestType $getParcelLifeCycleRequest
     */
    public function __construct($getParcelLifeCycleRequest = null)
    {
      $this->getParcelLifeCycleRequest = $getParcelLifeCycleRequest;
    }

    /**
     * @return getParcelLifeCycleRequestType
     */
    public function getGetParcelLifeCycleRequest()
    {
      return $this->getParcelLifeCycleRequest;
    }

    /**
     * @param getParcelLifeCycleRequestType $getParcelLifeCycleRequest
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelLifeCycle
     */
    public function setGetParcelLifeCycleRequest($getParcelLifeCycleRequest)
    {
      $this->getParcelLifeCycleRequest = $getParcelLifeCycleRequest;
      return $this;
    }

}
