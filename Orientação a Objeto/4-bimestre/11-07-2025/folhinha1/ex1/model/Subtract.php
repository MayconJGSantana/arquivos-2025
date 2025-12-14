<?php

require_once("Calculator.php");

class Subtract extends Calculator {

    // Métodos abstratos

    public function calculate() : float{

        $result = $this -> getNumA() - $this -> getNumB();

        $result = parent::round($result);

        return $result;

    }


    
    // Magic methods

    public function getName () : string{

        return "subtração";
        
    }

    public function getSign() : string {


        return "-"
        ;
    }


}