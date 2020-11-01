<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class getOrderStatusResponse
{

    /**
     * @var getOrderStatusResponseType $getOrderStatusResult
     */
    protected $getOrderStatusResult = null;

    /**
     * @param getOrderStatusResponseType $getOrderStatusResult
     */
    public function __construct($getOrderStatusResult = null)
    {
      $this->getOrderStatusResult = $getOrderStatusResult;
    }

    /**
     * @return getOrderStatusResponseType
     */
    public function getGetOrderStatusResult()
    {
      return $this->getOrderStatusResult;
    }

    /**
     * @param getOrderStatusResponseType $getOrderStatusResult
     * @return \Zuckerwelt\Dpdcloudapi\Model\getOrderStatusResponse
     */
    public function setGetOrderStatusResult($getOrderStatusResult)
    {
      $this->getOrderStatusResult = $getOrderStatusResult;
      return $this;
    }

}
