<?php

require_once("Produto.php");

class Balde extends Produto {

    // Atributos

    private float $capacidade;

    
    // Métodos

    public function __toString() : string{

        $dados = parent::__toString() . "\n";
        $dados .= "Capacidade: " . $this -> getCapacidade();

        return $dados;
        
    }

    /**
     * Get the value of capacidade
     */
    public function getCapacidade(): float
    {
        return $this->capacidade;
    }

    /**
     * Set the value of capacidade
     */
    public function setCapacidade(float $capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }
}