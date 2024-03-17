<?php

/* Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
-L'e-commerce vende prodotti per animali.
-I prodotti sono categorizzati, le categorie sono Cani o Gatti.
-I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

Stampiamo delle card contenenti i dettagli dei prodotti, 
come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). */

class Products
{
    /**
     * Generic class of product (parent class)
     */
    public function __construct(public $name, public $category, public $image, public $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->image = $image;
        $this->price = $price;
    }
}
class Food extends Products
{
    /**
     * Specific class of product (child class)
     */
    public function __construct($name, $category, $image, $price, public $ingredients)
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
    public function __construct($name, $category, $image, $price, public $material)
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
    public function __construct($name, $category, $image, $price, public $material, public $measure)       //creare l'array!
    {
        parent::__construct($name, $category, $image, $price);
        $this->material = $material;
        $this->measure;
    }
}

$food = [
    new Food('Bocconcini', 'Cat', 'image', '€ 7,68', 'chicken'),
    new Food('Corcchette', 'Dog', 'image', '€ 5,50', 'meat'),
];
$toys = [
    new Toys('Mouse peluche', 'Cat', 'image', '€ 10,00', 'pelcuhe'),
    new Toys('Osso', 'Dog', 'image', '€ 5,00', 'plastic'),

];
$sits = [
    new Sits('Lettiera', 'Cat', 'image', '€ 6,00', 'plastic', 'medium'),
    new Sits('Cuccia', 'Dog', 'image', '€ 80,00', 'wood', 'extra-large'),
];
