<?php

class User {
    public $username;
    public $userLastName;
    public $userEmail;
    public $userPayment;
    public $cardExipiration;
    public $discount;

     function __construct(String $_username, String $_userLastName, String $_userEmail, String $_userPayment, Bool $_cardExipiration, Int $_discount = 0) {
        $this->username = $_username;
        $this->userLastName = $_userLastName;
        $this->userEmail = $_userEmail;
        $this->userPayment = $_userPayment;
        $this->cardExipiration = $_cardExipiration;
        $this->discount = $_discount;

    }

  public function setDiscount($signIn)
    {
        if($signIn === true) {
            $this->discount = 20;
        }
        
    } 

    public function getDiscount()
    {
        return 
    }
}