<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class getParcelShopFinderResponse
{

    /**
     * @var getParcelShopFinderResponseType $getParcelShopFinderResult
     */
    protected $getParcelShopFinderResult = null;

    /**
     * @param getParcelShopFinderResponseType $getParcelShopFinderResult
     */
    public function __construct($getParcelShopFinderResult = null)
    {
      $this->getParcelShopFinderResult = $getParcelShopFinderResult;
    }

    /**
     * @return getParcelShopFinderResponseType
     */
    public function getGetParcelShopFinderResult()
    {
      return $this->getParcelShopFinderResult;
    }

    /**
     * @param getParcelShopFinderResponseType $getParcelShopFinderResult
     * @return \Zuckerwelt\Dpdcloudapi\Model\getParcelShopFinderResponse
     */
    public function setGetParcelShopFinderResult($getParcelShopFinderResult)
    {
      $this->getParcelShopFinderResult = $getParcelShopFinderResult;
      return $this;
    }

}
