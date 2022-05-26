<?php

class Product {
    public $name;
    public $description;
    public $price;
    public $discountPrice;
    public $isAvailable;
    public $poster;

    public function __construct(String $_name, String $_description, Float $_price, String $_poster, Bool $_isAvailable = true, Float $_discountPrice = 0) {
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;
        $this->discountPrice = $_discountPrice;
        $this->isAvailable = $_isAvailable;
        $this->poster = $_poster;
    }
}
