<?php 

require_once("model/Circle.php");
require_once("model/Rectangle.php");
require_once("model/Square.php");

$choiceForm = readline("Forma? ");

$form = null;

switch ($choiceForm) {

    case 1:

        $form = new Circle();

        $radius = readline("Raio: ");

        $form -> setRadius($radius);

        break;

    case 2: 

        $form = new Rectangle();

        $base = readline("Base: ");
        $height = readline("Altura: ");

        $form -> setBase($base)
              -> setHeight($height);

        break;

    case 3: 

        $form = new Square();

        $side = readline("Lado: ");

        $form -> setSide($side);

        break;

}


print($form . "\n");

