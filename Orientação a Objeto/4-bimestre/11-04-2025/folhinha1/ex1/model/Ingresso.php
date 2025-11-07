<?php

class Ingresso {

    // Atributos

    private float $valor;



    // Gets e Sets

    /**
     * Get the value of valor
     */
    public function getValor(): float
    {

        return $this->valor;

    }

    /**
     * Set the value of valor
     */
    public function setValor(float $valor): self
    {

        $this->valor = $valor;

        return $this;

    }



    // Métodos

    public function getValorTotal(): float
    {

        return $this->valor;

    }



    // Métodos mágicos

    public function __toString()
    {
        
        $dados = str_pad("Ingresso", 40, "-", STR_PAD_BOTH) . "\n";
        $dados .= "Valor fixo de " . $this -> getValorTotal() . "\n";
        $dados .= "Total: " . $this -> getValorTotal();

        return $dados;

    }

}