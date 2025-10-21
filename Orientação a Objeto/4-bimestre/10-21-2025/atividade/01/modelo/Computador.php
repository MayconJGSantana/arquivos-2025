<?php

require_once("Produto.php");

class Computador extends Produto {

    // Atributos

    private string $processador;
    private string $memoria;


    // Métodos

    public function __toString() : string {

        $dados = parent::__toString() . "\n";
        $dados .= "Processador: " . $this -> getProcessador() . "\n";
        $dados .= "Memória: " . $this -> getMemoria();

        return $dados;

    }

    /**
     * Get the value of processador
     */
    public function getProcessador(): string
    {
        return $this->processador;
    }

    /**
     * Set the value of processador
     */
    public function setProcessador(string $processador): self
    {
        $this->processador = $processador;

        return $this;
    }

    /**
     * Get the value of memoria
     */
    public function getMemoria(): string
    {
        return $this->memoria;
    }

    /**
     * Set the value of memoria
     */
    public function setMemoria(string $memoria): self
    {
        $this->memoria = $memoria;

        return $this;
    }
}