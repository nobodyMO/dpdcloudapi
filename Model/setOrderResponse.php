<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class setOrderResponse
{

    /**
     * @var setOrderResponseType $setOrderResult
     */
    public $setOrderResult = null;

    /**
     * @param setOrderResponseType $setOrderResult
     */
    public function __construct($setOrderResult = null)
    {
      $this->setOrderResult = $setOrderResult;
    }

    /**
     * @return setOrderResponseType
     */
    public function getSetOrderResult()
    {
      return $this->setOrderResult;
    }

    /**
     * @param setOrderResponseType $setOrderResult
     * @return \Zuckerwelt\Dpdcloudapi\Model\setOrderResponse
     */
    public function setSetOrderResult($setOrderResult)
    {
      $this->setOrderResult = $setOrderResult;
      return $this;
    }

}
