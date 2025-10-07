<?php

class Poder {

    private string $descricao;
    private int $forca;

    // Métodos

    public function __construct(string $descricao, int $forca) {

        $this -> forca = $forca;
        $this -> descricao = $descricao;
        
    }

    public function getForcaTotal(int $forcaMago) : float {

        

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
     * Get the value of forca
     */
    public function getForca(): int
    {
        return $this->forca;
    }

    /**
     * Set the value of forca
     */
    public function setForca(int $forca): self
    {
        $this->forca = $forca;

        return $this;
    }

}