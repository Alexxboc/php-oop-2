<?php

trait IdNumber
{

    public $numberId;

    public function setIdNumber(Int $min, Int $max)
    {   
        if(!is_int($min) && !is_int($max)) {
            throw new Exception('Is not a number');
        }
        return $this->numberId = rand($min, $max);
    }
}
