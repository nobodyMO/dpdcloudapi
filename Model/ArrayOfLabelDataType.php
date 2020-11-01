<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class ArrayOfLabelDataType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var LabelDataType[] $LabelData
     */
    public $LabelData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return LabelDataType[]
     */
    public function getLabelData()
    {
      return $this->LabelData;
    }

    /**
     * @param LabelDataType[] $LabelData
     * @return \Zuckerwelt\Dpdcloudapi\Model\ArrayOfLabelDataType
     */
    public function setLabelData(array $LabelData = null)
    {
      $this->LabelData = $LabelData;
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
      return isset($this->LabelData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return LabelDataType
     */
    public function offsetGet($offset)
    {
      return $this->LabelData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param LabelDataType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->LabelData[] = $value;
      } else {
        $this->LabelData[$offset] = $value;
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
      unset($this->LabelData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return LabelDataType Return the current element
     */
    public function current()
    {
      return current($this->LabelData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->LabelData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->LabelData);
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
      reset($this->LabelData);
    }

    /**
     * Countable implementation
     *
     * @return LabelDataType Return count of elements
     */
    public function count()
    {
      return count($this->LabelData);
    }

}
