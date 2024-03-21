<?php

class Food extends Products
{
    /**
     * Specific class of product (child class)
     */
    public function __construct($name, Categories $category, $image, $price, public $ingredients)
    {
        parent::__construct($name, $category, $image, $price);
        $this->ingredients = $ingredients;
    }
}

class Toys extends Products
{
    /**
     * Specific class of product (child class)
     */
    public function __construct($name, Categories $category, $image, $price, public $material)
    {
        parent::__construct($name, $category, $image, $price);
        $this->material = $material;
    }
}

class Sits extends Products
{
    /**
     * Specific class of product (child class)
     */
    public function __construct($name, Categories $category, $image, $price, public $material, public $measure)
    {
        parent::__construct($name, $category, $image, $price);
        $this->material = $material;
        $this->measure = $measure;
    }
}
