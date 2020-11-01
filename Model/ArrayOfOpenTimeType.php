<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class ArrayOfOpenTimeType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OpenTimeType[] $OpenTimeType
     */
    protected $OpenTimeType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OpenTimeType[]
     */
    public function getOpenTimeType()
    {
      return $this->OpenTimeType;
    }

    /**
     * @param OpenTimeType[] $OpenTimeType
     * @return \Zuckerwelt\Dpdcloudapi\Model\ArrayOfOpenTimeType
     */
    public function setOpenTimeType(array $OpenTimeType = null)
    {
      $this->OpenTimeType = $OpenTimeType;
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
      return isset($this->OpenTimeType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OpenTimeType
     */
    public function offsetGet($offset)
    {
      return $this->OpenTimeType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OpenTimeType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OpenTimeType[] = $value;
      } else {
        $this->OpenTimeType[$offset] = $value;
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
      unset($this->OpenTimeType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OpenTimeType Return the current element
     */
    public function current()
    {
      return current($this->OpenTimeType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OpenTimeType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OpenTimeType);
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
      reset($this->OpenTimeType);
    }

    /**
     * Countable implementation
     *
     * @return OpenTimeType Return count of elements
     */
    public function count()
    {
      return count($this->OpenTimeType);
    }

}
