<?php

class Product {
    protected $name;
    protected $description;
    protected $price;
    protected $discountPrice;
    protected $discountAmount;
    protected $isAvailable;

    public function __construct(String $_name, String $_description, Float $_price, Float $_discountPrice, Int $_discountAmount, Bool $_isAvailable = true) {
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;
        $this->discountPrice = $_discountPrice;
        $this->discountAmount = $_discountAmount;
        $this->isAvailable = $_isAvailable;
    }
}
