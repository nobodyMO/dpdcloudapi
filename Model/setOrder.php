<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;
use Zuckerwelt\Dpdcloudapi\Model\setOrderRequestType;
class setOrder
{

    /**
     * @var setOrderRequestType $setOrderRequest
     */
    public $setOrderRequest;

    /**
     * @param setOrderRequestType $setOrderRequest
     */
    public function __construct(array $orders,$partnerName, $partnerToken, $userName, $userToken, $language,$OrderAction,$shipDate,$labelSize, $labelStartPosition)
    {
      $this->setOrderRequest = new setOrderRequestType ($orders,$partnerName, $partnerToken, $userName, $userToken, $language,$OrderAction,$shipDate,$labelSize, $labelStartPosition);
    }

    /**
     * @return setOrderRequestType
     */
    public function getSetOrderRequest()
    {
      return $this->setOrderRequest;
    }

    /**
     * @param setOrderRequestType $setOrderRequest
     * @return \Zuckerwelt\Dpdcloudapi\Model\setOrder
     */
    public function setSetOrderRequest($setOrderRequest)
    {
      $this->setOrderRequest = $setOrderRequest;
      return $this;
    }

}
