<?php

class Pessoa {

    // Atributos

    protected string $nome;
    protected int $rg;
    protected int $idade;
    

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of rg
     */
    public function getRg(): int
    {
        return $this->rg;
    }

    /**
     * Set the value of rg
     */
    public function setRg(int $rg): self
    {
        $this->rg = $rg;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade(): int
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }
    
}