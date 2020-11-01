<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class ArrayOfParcelShopType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ParcelShopType[] $ParcelShop
     */
    protected $ParcelShop = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ParcelShopType[]
     */
    public function getParcelShop()
    {
      return $this->ParcelShop;
    }

    /**
     * @param ParcelShopType[] $ParcelShop
     * @return \Zuckerwelt\Dpdcloudapi\Model\ArrayOfParcelShopType
     */
    public function setParcelShop(array $ParcelShop = null)
    {
      $this->ParcelShop = $ParcelShop;
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
      return isset($this->ParcelShop[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ParcelShopType
     */
    public function offsetGet($offset)
    {
      return $this->ParcelShop[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ParcelShopType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ParcelShop[] = $value;
      } else {
        $this->ParcelShop[$offset] = $value;
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
      unset($this->ParcelShop[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ParcelShopType Return the current element
     */
    public function current()
    {
      return current($this->ParcelShop);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ParcelShop);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ParcelShop);
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
      reset($this->ParcelShop);
    }

    /**
     * Countable implementation
     *
     * @return ParcelShopType Return count of elements
     */
    public function count()
    {
      return count($this->ParcelShop);
    }

}
