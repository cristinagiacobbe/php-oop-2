<?php

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
