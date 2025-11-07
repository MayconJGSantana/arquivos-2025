<?php

require_once("Calculator.php");

class Sum extends Calculator {

    // Métodos abstratos

    public function calculate() : float{

        $result = $this -> getNumA() + $this -> getNumB();

        $result = parent::round($result);

        return $result;

    }

}