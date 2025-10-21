<?php

require_once("modelo/Balde.php");
require_once("modelo/Computador.php");
require_once("modelo/Livro.php");
require_once("modelo/Produto.php");

$produto = new Produto();

$produto -> setDescricao("Genérico")
         -> setUnidadeMedida("unidade");
print($produto . "\n\n");

$livro = new Livro();
$livro -> setDescricao("Conhecimento abrangente")
       -> setUnidadeMedida("unidade")
       -> setAutor("Noah Gordon");
print($livro . "\n\n");

$computador = new Computador();
$computador -> setDescricao("Tecnologia avançada")
            -> setUnidadeMedida("unidade")
            -> setProcessador("i7-13900")
            -> setMemoria("8 GB");
print($computador . "\n\n");

$balde = new Balde();
$balde -> setDescricao("Objeto de metal")
       -> setUnidadeMedida("unidade")
       -> setCapacidade(10000);
print($balde . "\n\n");
