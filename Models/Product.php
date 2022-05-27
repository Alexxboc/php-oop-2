<?php


class Product {

    use IdNumber;

    public $name;
    public $description;
    public $price;
    public $discount;
    public $isAvailable;
    public $poster;

    public function __construct(String $_name, String $_description, Float $_price, String $_poster, Bool $_isAvailable = true, Float $_discount = 0) {
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;
        $this->discount = $_discount;
        $this->isAvailable = $_isAvailable;
        $this->poster = $_poster;
    }

    public function setDiscount($user )
    {
        if($user->signIn === true) {
           $this->discount = $this->price * 0.2;
        } else {
             $this->discount = 0;
        }
        
    } 
    
}
