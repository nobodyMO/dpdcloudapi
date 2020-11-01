<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;
use Zuckerwelt\Dpdcloudapi\Model\OrderDataType;

class ArrayOfOrderDataType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OrderDataType[] $OrderData
     */
    protected $OrderData = null;

    
    public function __construct(array $orders)
    {
       foreach ($orders as $order) {			
			$this->OrderData[]=new OrderDataType($order);
		}    
    }

    /**
     * @return OrderDataType[]
     */
    public function getOrderData()
    {
      return $this->OrderData;
    }

    /**
     * @param OrderDataType[] $OrderData
     * @return \Zuckerwelt\Dpdcloudapi\Model\ArrayOfOrderDataType
     */
    public function setOrderData(array $OrderData = null)
    {
      $this->OrderData = $OrderData;
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
      return isset($this->OrderData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OrderDataType
     */
    public function offsetGet($offset)
    {
      return $this->OrderData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OrderDataType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OrderData[] = $value;
      } else {
        $this->OrderData[$offset] = $value;
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
      unset($this->OrderData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OrderDataType Return the current element
     */
    public function current()
    {
      return current($this->OrderData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OrderData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OrderData);
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
      reset($this->OrderData);
    }

    /**
     * Countable implementation
     *
     * @return OrderDataType Return count of elements
     */
    public function count()
    {
      return count($this->OrderData);
    }

}
