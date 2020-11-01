<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class ArrayOfShopServiceType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ShopServiceType[] $ShopService
     */
    protected $ShopService = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShopServiceType[]
     */
    public function getShopService()
    {
      return $this->ShopService;
    }

    /**
     * @param ShopServiceType[] $ShopService
     * @return \Zuckerwelt\Dpdclousapi\Model\ArrayOfShopServiceType
     */
    public function setShopService(array $ShopService = null)
    {
      $this->ShopService = $ShopService;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->ShopService[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ShopServiceType
     */
    public function offsetGet($offset)
    {
      return $this->ShopService[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ShopServiceType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ShopService[] = $value;
      } else {
        $this->ShopService[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ShopService[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ShopServiceType Return the current element
     */
    public function current()
    {
      return current($this->ShopService);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ShopService);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ShopService);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->ShopService);
    }

    /**
     * Countable implementation
     *
     * @return ShopServiceType Return count of elements
     */
    public function count()
    {
      return count($this->ShopService);
    }

}
