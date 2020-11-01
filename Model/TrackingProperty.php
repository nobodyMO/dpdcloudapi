<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class TrackingProperty
{

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var string $value
     */
    protected $value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param string $key
     * @return \Zuckerwelt\Dpdcloudapi\Model\TrackingProperty
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Zuckerwelt\Dpdcloudapi\Model\TrackingProperty
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
