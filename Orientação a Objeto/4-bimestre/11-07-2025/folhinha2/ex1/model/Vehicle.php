<?php

abstract class Vehicle {

    // Attribute

    public float $fixedPrice;
    public float $additionalPrice;
    public float $mileage;


    
    // Abstract method;

    public abstract function totalPrice() : float;




    // Getters & Setters

    /**
     * Get the value of name
     */
    public abstract function getName(): string;

    /**
     * Get the value of fixedPrice
     */
    public function getFixedPrice(): float
    {
        return $this->fixedPrice;
    }

    /**
     * Set the value of fixedPrice
     */
    public function setFixedPrice(float $fixedPrice): self
    {
        $this->fixedPrice = $fixedPrice;

        return $this;
    }

    /**
     * Get the value of additionalPrice
     */
    public function getAdditionalPrice(): float
    {
        return $this->additionalPrice;
    }

    /**
     * Set the value of additionalPrice
     */
    public function setAdditionalPrice(float $additionalPrice): self
    {
        $this->additionalPrice = $additionalPrice;

        return $this;
    }

    /**
     * Get the value of mileage
     */
    public function getMileage(): float
    {
        return $this->mileage;
    }

    /**
     * Set the value of mileage
     */
    public function setMileage(float $mileage): self {

        $this->mileage = $mileage;

        return $this;

    }
    



    // Methods

    public function roundedPrice(float $price) : float {

        $roundedPrice = round($price, 2);

        return $roundedPrice;

    }



    // Magic Methods

    public function __toString() {

        $name = $this -> getName();
        $fixedPrice = number_format($this -> getFixedPrice(), 2, ",", ".");
        $totalPrice = number_format($this -> totalPrice(), 2, ",", ".");
        $mileage = number_format($this -> getMileage(), 1, ",", ".");

        $data = "O veículo " . $name . ", foi alugado por R$ " . $fixedPrice . ", rodou " . $mileage . " quilômetros com custo total de R$ " . $totalPrice;

        return $data;

    }
}