<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class ErrorDataType
{

    /**
     * @var int $ErrorID
     */
    public $ErrorID = null;

    /**
     * @var string $ErrorCode
     */
    public $ErrorCode = null;

    /**
     * @var string $ErrorMsgShort
     */
    public $ErrorMsgShort = null;

    /**
     * @var string $ErrorMsgLong
     */
    public $ErrorMsgLong = null;

    /**
     * @param int $ErrorID
     */
    public function __construct($ErrorID = null)
    {
      $this->ErrorID = $ErrorID;
    }

    /**
     * @return int
     */
    public function getErrorID()
    {
      return $this->ErrorID;
    }

    /**
     * @param int $ErrorID
     * @return \Zuckerwelt\Dpdcloudapi\Model\ErrorDataType
     */
    public function setErrorID($ErrorID)
    {
      $this->ErrorID = $ErrorID;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
      return $this->ErrorCode;
    }

    /**
     * @param string $ErrorCode
     * @return \Zuckerwelt\Dpdcloudapi\Model\ErrorDataType
     */
    public function setErrorCode($ErrorCode)
    {
      $this->ErrorCode = $ErrorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorMsgShort()
    {
      return $this->ErrorMsgShort;
    }

    /**
     * @param string $ErrorMsgShort
     * @return \Zuckerwelt\Dpdcloudapi\Model\ErrorDataType
     */
    public function setErrorMsgShort($ErrorMsgShort)
    {
      $this->ErrorMsgShort = $ErrorMsgShort;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorMsgLong()
    {
      return $this->ErrorMsgLong;
    }

    /**
     * @param string $ErrorMsgLong
     * @return \Zuckerwelt\Dpdcloudapi\Model\ErrorDataType
     */
    public function setErrorMsgLong($ErrorMsgLong)
    {
      $this->ErrorMsgLong = $ErrorMsgLong;
      return $this;
    }

}
