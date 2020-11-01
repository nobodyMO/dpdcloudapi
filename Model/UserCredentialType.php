<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class UserCredentialType
{

    /**
     * @var int $cloudUserID
     */
    protected $cloudUserID = null;

    /**
     * @var string $Token
     */
    protected $Token = null;

    /**
     * @param int $cloudUserID
     */
    public function __construct($cloudUserID,$Token)
    {
      $this->cloudUserID = $cloudUserID;
      $this->Token = $Token;
    }

    /**
     * @return int
     */
    public function getCloudUserID()
    {
      return $this->cloudUserID;
    }

    /**
     * @param int $cloudUserID
     * @return \Zuckerwelt\Dpdcloudapi\Model\UserCredentialType
     */
    public function setCloudUserID($cloudUserID)
    {
      $this->cloudUserID = $cloudUserID;
      return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
      return $this->Token;
    }

    /**
     * @param string $Token
     * @return \Zuckerwelt\Dpdcloudapi\Model\UserCredentialType
     */
    public function setToken($Token)
    {
      $this->Token = $Token;
      return $this;
    }

}
