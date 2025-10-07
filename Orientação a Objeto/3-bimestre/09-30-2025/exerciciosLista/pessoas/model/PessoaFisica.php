<?php

require_once("Pessoa.php");

class PessoaFisica extends Pessoa {

    private int $idade;
    private string $cpf;

    // Métodos 

    public function __toString() : string {

        $dados = "Nome: " . $this -> nome . " | ";
        $dados .= "Idade: " . $this -> idade . " | ";
        $dados .= "CPF: " . $this -> cpf;

        return $dados;
        
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

    /**
     * Get the value of cpf
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     */
    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }
    
}