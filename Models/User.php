<?php


class User
{
    use IdNumber;

    public $userName;
    public $userLastName;
    public $userEmail;
    public $userPayment;
    public $cardExipiration;
    public $signIn;
   

    function __construct(String $_userName, String $_userLastName, String $_userEmail, String $_userPayment, Bool $_cardExipiration, Bool $_signIn)
    {
        $this->userName = $_userName;
        $this->userLastName = $_userLastName;
        $this->userEmail = $_userEmail;
        $this->userPayment = $_userPayment;
        $this->cardExipiration = $_cardExipiration;
        $this->signIn = $_signIn;
    }
}
