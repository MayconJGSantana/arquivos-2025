<?php

require_once("model/Ingresso.php");
require_once("model/IngressoVIP.php");
require_once("model/IngressoCamarote.php");

$ingresso = new Ingresso();
$ingresso -> setValor("100");

print($ingresso . "\n" . "\n");


$ingressoVIP = new IngressoVIP();
$ingressoVIP -> setValor("100")
             -> setValorAdicional("30");

print($ingressoVIP . "\n" . "\n");


$ingressoCamarote = new IngressoCamarote();
$ingressoCamarote -> setValor("130")
                  -> setValorAdicional("30");

print($ingressoCamarote . "\n" . "\n");



