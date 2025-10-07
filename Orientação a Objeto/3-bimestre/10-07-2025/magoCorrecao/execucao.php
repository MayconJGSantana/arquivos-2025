<?php

require_once("model/Combatente.php");
require_once("model/Curandeiro.php");
require_once("model/Poder.php");

$recuperaEnergia = new Poder("Recupera energia", 0);
$recuperaEnergiaSuper = new Poder("Recupera energia super", 20);
$golpeNormal = new Poder("Golpe normal", 0);
$golpeEspecial = new Poder("Golpe especial", 15);

$curandeiro = new Curandeiro();
$curandeiro -> setNome("Tirambu")
            -> setPoder($golpeEspecial)
            -> setForcaDeCura(100);

$curandeiro -> lancarPoder();

print("\n");

