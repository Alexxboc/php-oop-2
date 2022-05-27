<?php

trait IdNumber
{

    public $numberId;

    public function setIdNumber(Int $min, Int $max)
    {
        return $this->numberId = rand($min, $max);
    }
}
