<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class ArrayOfErrorDataType1 implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ErrorDataType[] $ErrorData
     */
    protected $ErrorData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ErrorDataType[]
     */
    public function getErrorData()
    {
      return $this->ErrorData;
    }

    /**
     * @param ErrorDataType[] $ErrorData
     * @return \Zuckerwelt\Dpdcloudapi\Model\ArrayOfErrorDataType1
     */
    public function setErrorData(array $ErrorData = null)
    {
      $this->ErrorData = $ErrorData;
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
      return isset($this->ErrorData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ErrorDataType
     */
    public function offsetGet($offset)
    {
      return $this->ErrorData[$offset];
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
        $this->ErrorData[] = $value;
      } else {
        $this->ErrorData[$offset] = $value;
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
      unset($this->ErrorData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ErrorDataType Return the current element
     */
    public function current()
    {
      return current($this->ErrorData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ErrorData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ErrorData);
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
      reset($this->ErrorData);
    }

    /**
     * Countable implementation
     *
     * @return ErrorDataType Return count of elements
     */
    public function count()
    {
      return count($this->ErrorData);
    }

}
