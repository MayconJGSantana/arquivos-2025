<?php

require_once("Calculator.php");

class Division extends Calculator {

    // Métodos abstratos

    public function calculate() : float{

        $result = $this -> getNumA() / $this -> getNumB();

        $result = parent::round($result);

        return $result;

    }


    
    // Magic methods

    public function getName () : string{

        return "divisão";
        
    }

    public function getSign() : string {


        return "/"
        ;
    }


}