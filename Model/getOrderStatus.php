<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;
use Zuckerwelt\Dpdcloudapi\Model\getOrderStatusRequestType;

class getOrderStatus
{

    /**
     * @var getOrderStatusRequestType $getOrderStatusRequest
     */
    protected $getOrderStatusRequest = null;

    /**
     * @param getOrderStatusRequestType $getOrderStatusRequest
     */
    public function __construct($partnerName, $partnerToken, $userName, $userToken, $language,$parcelNo,$deliveryZipCode = null)
     {
      $this->getOrderStatusRequest = new getOrderStatusRequestType ($partnerName, $partnerToken, $userName, $userToken, $language,$parcelNo,$deliveryZipCode);
    }

    /**
     * @return getOrderStatusRequestType
     */
    public function getGetOrderStatusRequest()
    {
      return $this->getOrderStatusRequest;
    }

    /**
     * @param getOrderStatusRequestType $getOrderStatusRequest
     * @return \Zuckerwelt\Dpdcloudapi\Model\getOrderStatus
     */
    public function setGetOrderStatusRequest($getOrderStatusRequest)
    {
      $this->getOrderStatusRequest = $getOrderStatusRequest;
      return $this;
    }

}
