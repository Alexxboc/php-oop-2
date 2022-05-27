<?php

trait IdNumber {
    public $idNumber;

    public function setIdNumber(Int $min, Int $max)
    {
        return $this->idNumber = rand($min, $max);
    }
}