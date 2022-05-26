<?php

class Product {
    public $name;
    public $description;
    public $price;
    public $discountPrice;
    public $discountAmount;
    public $isAvailable;
    public $poster;

    public function __construct(String $_name, String $_description, Float $_price, Float $_discountPrice, Int $_discountAmount, String $_poster, Bool $_isAvailable = true) {
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;
        $this->discountPrice = $_discountPrice;
        $this->discountAmount = $_discountAmount;
        $this->isAvailable = $_isAvailable;
        $this->poster = $_poster;
    }
}
