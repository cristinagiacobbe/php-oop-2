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
    public function __construct($name, $category, $image, $price, public $material, public $measure)
    {
        parent::__construct($name, $category, $image, $price);
        $this->material = $material;
        $this->measure = $measure;
    }
}

$food = [
    new Food('Bocconcini', 'Cat', '../img/bocconcini.jpg', '€ 7,68', 'chicken'),
    new Food('Crocchette', 'Dog', '../img/crocchette.jpg', '€ 5,50', 'meat'),
];
$toys = [
    new Toys('Mouse peluche', 'Cat', '../img/mouse.jpg', '€ 10,00', 'peluche'),
    new Toys('Osso', 'Dog', '../img/osso.jpg', '€ 5,00', 'plastic'),

];
$sits = [
    new Sits('Lettiera', 'Cat', '../img/lettiera.jpg', '€ 6,00', 'plastic', 'medium'),
    new Sits('Cuccia', 'Dog', '../img/cuccia.jpg', '€ 80,00', 'wood', 'extra-large'),
];

$products = [$food, $toys, $sits];

foreach ($products as $product) {
    foreach ($product as $typeProduct) {
        var_dump($typeProduct->name);
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal e-commerce shop</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>


</head>

<body>
    <h1>Animal product</h1>
    <div class="row">
        <div class="col">
            <div class="card">
                <ul class="list-unstyled">
                    <?php foreach ($products as $key => $product) : ?>
                        <li><?php foreach ($product as $typeProduct) : ?>
                                <p><?php echo $typeProduct->name ?></p>
                                <p><?php echo $typeProduct->category ?></p>
                                <p><?php echo $typeProduct->price ?></p>
                            <?php endforeach; ?>
                        </li>

                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>