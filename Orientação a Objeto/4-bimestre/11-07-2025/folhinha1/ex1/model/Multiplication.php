<?php

require_once("Calculator.php");

class Multiplication extends Calculator {

    // Métodos abstratos

    public function calculate() : float{

        $result = $this -> getNumA() * $this -> getNumB();

        $result = parent::round($result);

        return $result;

    }


    
    // Magic methods

    public function getName () : string{

        return "multiplicação";
        
    }

    public function getSign() : string {


        return "*";
        
    }


}