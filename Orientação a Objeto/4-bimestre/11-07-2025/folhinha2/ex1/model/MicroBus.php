<?php

require_once("Vehicle.php");

class MicroBus extends Vehicle {

    // Methods

    public function totalPrice() : float {

        $totalPrice = $this -> getFixedPrice() + $this -> getMileage() * $this -> getAdditionalPrice();

        return parent::roundedPrice($totalPrice);

    }



    // Magic methods

    public function __construct() {

        $this -> setAdditionalPrice(2.75);
        
    }

    public function getName () : string{

        return "micro-ônibus";
        
    }

}