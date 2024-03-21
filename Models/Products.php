<?php

class Products
{
    /**
     * Generic class of product (parent class)
     */
    public function __construct(public $name, public Categories $category, public $image, public $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->image = $image;
        $this->price = $price;
    }
}
