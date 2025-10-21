<?php

class Midia {

    // Atributos

    private string $descricao;
    private float $precoPago;


    // Métodos

    public function __toString() : string {

        $dados = "Descrição: " . $this -> getDescricao() . "\n";
        $dados .= "Preço pago: " . $this -> getPrecoPago() . "\n";
        $dados .= "Tipo: " . $this -> getTipo() . "\n";

        return $dados;

    }

    public function getTipo() : string {

        return "Mídia genérica";

    }

    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of precoPago
     */
    public function getPrecoPago(): float
    {
        return $this->precoPago;
    }

    /**
     * Set the value of precoPago
     */
    public function setPrecoPago(float $precoPago): self
    {
        $this->precoPago = $precoPago;

        return $this;
    }
}