<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class ArrayOfOpeningHoursType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OpeningHoursType[] $OpeningHours
     */
    protected $OpeningHours = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OpeningHoursType[]
     */
    public function getOpeningHours()
    {
      return $this->OpeningHours;
    }

    /**
     * @param OpeningHoursType[] $OpeningHours
     * @return \Zuckerwelt\Dpdcloudapi\Model\ArrayOfOpeningHoursType
     */
    public function setOpeningHours(array $OpeningHours = null)
    {
      $this->OpeningHours = $OpeningHours;
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
      return isset($this->OpeningHours[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OpeningHoursType
     */
    public function offsetGet($offset)
    {
      return $this->OpeningHours[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OpeningHoursType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OpeningHours[] = $value;
      } else {
        $this->OpeningHours[$offset] = $value;
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
      unset($this->OpeningHours[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OpeningHoursType Return the current element
     */
    public function current()
    {
      return current($this->OpeningHours);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OpeningHours);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OpeningHours);
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
      reset($this->OpeningHours);
    }

    /**
     * Countable implementation
     *
     * @return OpeningHoursType Return count of elements
     */
    public function count()
    {
      return count($this->OpeningHours);
    }

}
