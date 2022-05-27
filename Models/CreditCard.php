<?php
class CreditCard
{
  public function __construct(String $number, String $ccv, String $expirationMonth, String $expirationYear)
  {
    $this->number = $number;
    $this->ccv = $ccv;
    $this->expirationMonth = $expirationMonth;
    $this->expirationYear = $expirationYear;
  }
}