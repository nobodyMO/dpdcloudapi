<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class PartnerCredentialType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Token
     */
    protected $Token = null;

    
    public function __construct($Name,$Token)
    {
		$this->Name=$Name;
		$this->Token=$Token;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Zuckerwelt\Dpdcloudapi\Model\PartnerCredentialType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \Zuckerwelt\Dpdcloudapi\Model\PartnerCredentialType
     */
    public function setToken($Token)
    {
      $this->Token = $Token;
      return $this;
    }

}
