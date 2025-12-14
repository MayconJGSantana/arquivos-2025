<?php

require_once("Vehicle.php");

class Van extends Vehicle {

    // Methods

    public function totalPrice() : float {

        $totalPrice = $this -> getFixedPrice() + $this -> getMileage() * $this -> getAdditionalPrice();

        return parent::roundedPrice($totalPrice);

    }



    // Magic methods

    public function __construct() {

        $this -> setAdditionalPrice(2.1);
        
    }

    public function getName () : string{

        return "van";
        
    }

}