<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class ArrayOfHolidayType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var HolidayType[] $Holiday
     */
    protected $Holiday = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return HolidayType[]
     */
    public function getHoliday()
    {
      return $this->Holiday;
    }

    /**
     * @param HolidayType[] $Holiday
     * @return \Zuckerwelt\Dpdcloudapi\Model\ArrayOfHolidayType
     */
    public function setHoliday(array $Holiday = null)
    {
      $this->Holiday = $Holiday;
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
      return isset($this->Holiday[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return HolidayType
     */
    public function offsetGet($offset)
    {
      return $this->Holiday[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param HolidayType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Holiday[] = $value;
      } else {
        $this->Holiday[$offset] = $value;
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
      unset($this->Holiday[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return HolidayType Return the current element
     */
    public function current()
    {
      return current($this->Holiday);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Holiday);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Holiday);
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
      reset($this->Holiday);
    }

    /**
     * Countable implementation
     *
     * @return HolidayType Return count of elements
     */
    public function count()
    {
      return count($this->Holiday);
    }

}
