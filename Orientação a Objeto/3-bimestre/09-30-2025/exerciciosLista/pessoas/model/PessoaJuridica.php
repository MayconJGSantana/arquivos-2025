<?php

require_once("Pessoa.php");

class PessoaJuridica extends Pessoa {

    private string $nomeFantasia;
    private string $cpnj;

    // Método

    public function __toString () {
         
        $dados = "Nome: " . $this -> nome . " | ";
        $dados .= "Nome fantasia: " . $this -> nomeFantasia . " | ";
        $dados .= "CPNJ: " . $this -> cpnj;

        return $dados;
        
    }


    /**
     * Get the value of nomeFantasia
     */
    public function getNomeFantasia(): string
    {
        return $this->nomeFantasia;
    }

    /**
     * Set the value of nomeFantasia
     */
    public function setNomeFantasia(string $nomeFantasia): self
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    /**
     * Get the value of cpnj
     */
    public function getCpnj(): string
    {
        return $this->cpnj;
    }

    /**
     * Set the value of cpnj
     */
    public function setCpnj(string $cpnj): self
    {
        $this->cpnj = $cpnj;

        return $this;
    }

}