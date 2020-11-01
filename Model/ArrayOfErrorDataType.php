<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class ArrayOfErrorDataType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ErrorDataType[] $ErrorDataType
     */
    protected $ErrorDataType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ErrorDataType[]
     */
    public function getErrorDataType()
    {
      return $this->ErrorDataType;
    }

    /**
     * @param ErrorDataType[] $ErrorDataType
     * @return \Zuckerwelt\Dpdcloudapi\Model\ArrayOfErrorDataType
     */
    public function setErrorDataType(array $ErrorDataType = null)
    {
      $this->ErrorDataType = $ErrorDataType;
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
      return isset($this->ErrorDataType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ErrorDataType
     */
    public function offsetGet($offset)
    {
      return $this->ErrorDataType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ErrorDataType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ErrorDataType[] = $value;
      } else {
        $this->ErrorDataType[$offset] = $value;
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
      unset($this->ErrorDataType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ErrorDataType Return the current element
     */
    public function current()
    {
      return current($this->ErrorDataType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ErrorDataType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ErrorDataType);
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
      reset($this->ErrorDataType);
    }

    /**
     * Countable implementation
     *
     * @return ErrorDataType Return count of elements
     */
    public function count()
    {
      return count($this->ErrorDataType);
    }

}
