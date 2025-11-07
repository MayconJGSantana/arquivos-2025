<?php

abstract class Calculator {

    // Attributes

    protected float $numA;
    protected float $numB;


    // Abstract methods

    public abstract function calcula() : float;

}