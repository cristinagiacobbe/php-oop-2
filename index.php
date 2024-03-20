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
    public function __construct(public $name, public Categories $category, public $image, public $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->image = $image;
        $this->price = $price;
    }
}
class Categories
{
    public function __construct(public $name, public $icon)
    {
        $this->name = $name;
        $this->icon = $icon;
    }
}
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

$food = [
    new Food('Bocconcini', new Categories('cat', 'fa-solid fa-cat'), './img/bocconcini.jpg', '€ 7,68', 'chicken'),
    new Food('Crocchette', new Categories('dog', 'fa-solid fa-dog'), './img/crocchette.jpg', '€ 5,50', 'meat'),
];
$toys = [
    new Toys('Mouse peluche', new Categories('cat', 'fa-solid fa-cat'), './img/mouse.jpg', '€ 10,00', 'peluche'),
    new Toys('Osso', new Categories('dog', 'fa-solid fa-dog'), './img/osso.jpg', '€ 5,00', 'plastic'),

];
$sits = [
    new Sits('Lettiera', new Categories('cat', 'fa-solid fa-cat'), './img/lettiera.jpg', '€ 6,00', 'plastic', 'medium'),
    new Sits('Cuccia', new Categories('dog', 'fa-solid fa-dog'), './img/cuccia.jpg', '€ 80,00', 'wood', 'extra-large'),
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

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container text-center">
        <h1>Animal products</h1>
        <div class="row">
            <div class="col-4">


                <?php foreach ($products as $product) : ?>
                    <?php foreach ($product as $typeProduct) : ?>
                        <div class="card">
                            <h2><?php echo $typeProduct->name ?></h2>

                            <p><?php echo $typeProduct->price ?></p>
                            <img src="<?php echo $typeProduct->image ?>" alt="">

                            <?php
                            $category = $typeProduct->category;
                            ?>
                            <div>
                                <i class="<?php echo $category->icon ?>"></i>
                            </div>
                        <?php endforeach; ?>


                    <?php endforeach; ?>
                        </div>


            </div>
        </div>
    </div>
</body>

</html>