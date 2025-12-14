<?php

abstract class Employee {

    // Attributes

    protected string $name;



    // Getters and Setter

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): self {

        $this -> name = $name;

        return $this;

    }


    abstract public function getPositionName(): string;

    
    abstract public function getAdditionalPayment(): float;



    // Methods

    private function getFinalPayment() : float {

        $fixedPayment = 1500;

        $payment = $fixedPayment * $this -> getAdditionalPayment();

        $payment = round($payment, 2);

        return $payment;

    }

    private function roundPayment() : string {

        $roundedPayment = number_format($this -> getFinalPayment(), 2, ",", ".");

        return $roundedPayment;

    }



    // Magic methods

    public function __toString() {

        $dado = "O funcionário " . $this -> getName() . ", cargo " . $this -> getPositionName() . ", possui salário de R$ " . $this -> roundPayment();

        return $dado;

    }

}