<?php

require_once("IngressoVIP.php");

class IngressoCamarote extends IngressoVIP {

    // Atributos

    private float $valorAdicional;


    // Gets e Sets

    /**
     * Get the value of valorAdicional
     */
    public function getValorAdicional(): float
    {
        return $this->valorAdicional;
    }

    /**
     * Set the value of valorAdicional
     */
    public function setValorAdicional(float $valorAdicional): self
    {
        $this->valorAdicional = $valorAdicional;

        return $this;
    }

    

    // Métodos mágicos

    

    public function __toString() {

        $dados = str_pad("Ingresso Camarote", 40, "-", STR_PAD_BOTH) . "\n";
        $dados .= "O valor fixo de " . $this -> getValor() . " será somado ao adicional de " . $this -> getValorAdicional() . "\n";
        $dados .= "Total: " . $this -> getValor() . " + " . $this -> getValorAdicional() . " = " . $this -> getValorTotal();

        return $dados;
        
    }

}