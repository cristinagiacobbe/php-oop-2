<?php

/* Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
-L'e-commerce vende prodotti per animali.
-I prodotti sono categorizzati, le categorie sono Cani o Gatti.
-I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

Stampiamo delle card contenenti i dettagli dei prodotti, 
come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). */

require_once __DIR__ . "/Models/Products.php";
require_once __DIR__ . "/Models/Categories.php";
require_once __DIR__ . "/Models/ExtendedClasses.php";
require_once __DIR__ . "/Database/db.php";



/* foreach ($products as $product) {
    foreach ($product as $typeProduct) {
        var_dump($typeProduct->name);
    }
} */
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal e-commerce shop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h1 class="mt-5">Animal products</h1>

        <div class="row row-cols-1 row-cols-sm-2 g-3 ">

            <?php foreach ($products as $product) : ?>
                <?php foreach ($product as $typeProduct) : ?>
                    <div class="col">
                        <div class="card">
                            <h2><?php echo $typeProduct->name ?></h2>
                            <img src="<?php echo $typeProduct->image ?>" alt="Product image">
                            <?php
                            $category = $typeProduct->category;
                            ?>
                            <div>
                                <i class="<?php echo $category->icon ?>"></i>
                            </div>
                            <p><?php echo $typeProduct->price ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>