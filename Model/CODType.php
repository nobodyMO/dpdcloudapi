<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class CODType
{

    /**
     * @var string $Purpose
     */
    protected $Purpose = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var PaymentType $Payment
     */
    protected $Payment = null;

    /**
     * @param float $Amount
     * @param PaymentType $Payment
     */
    public function __construct(array $cod = null)
    {
		if (!is_null($cod)) {	  
			if (isset ($cod['Purpose'])) $this->Purpose = $cod['Purpose'];
			if (isset ($cod['Amount'])) $this->Amount = $cod['Amount'];
			if (isset ($cod['Payment'])) $this->Payment = $cod['Payment'];
		}		
    }

    /**
     * @return string
     */
    public function getPurpose()
    {
      return $this->Purpose;
    }

    /**
     * @param string $Purpose
     * @return \Zuckerwelt\Dpdcloudapi\Model\CODType
     */
    public function setPurpose($Purpose)
    {
      $this->Purpose = $Purpose;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \Zuckerwelt\Dpdcloudapi\Model\CODType
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return PaymentType
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param PaymentType $Payment
     * @return \Zuckerwelt\Dpdcloudapi\Model\CODType
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

}
