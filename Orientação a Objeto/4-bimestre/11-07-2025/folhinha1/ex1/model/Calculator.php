<?php

abstract class Calculator {

    // Attributes

    protected float $numA;
    protected float $numB;


    // Abstract methods

    public abstract function calculate() : float;
    public abstract function getSign() : string;
    public abstract function getName() : string;



    // Getters & Setters

    /**
     * Get the value of numA
     */
    public function getNumA(): float
    {
        return $this->numA;
    }

    /**
     * Set the value of numA
     */
    public function setNumA(float $numA): self
    {
        $this->numA = $numA;

        return $this;
    }

    /**
     * Get the value of numB
     */
    public function getNumB(): float
    {
        return $this->numB;
    }

    /**
     * Set the value of numB
     */
    public function setNumB(float $numB): self
    {
        $this->numB = $numB;

        return $this;
    }



    // Methods

    public function round($result) : float {

        $roundedResult = round($result, 2);

        return $roundedResult;
        
    }


    // Magic methods

    public function __toString() {

        $dados = "Operação: " . $this -> getName() . "\n";
        $dados .= "\t" . $this -> getNumA() . " " . $this -> getSign() . " " . $this -> getNumB() . " = " . "\033[32m" . $this -> calculate() . "\033[m";

        return $dados;

    }


    
}