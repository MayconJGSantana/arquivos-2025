<?php

require_once("Pessoa.php"); 

class Aluno extends Pessoa {

    // Atributos

    private string $matricula;


    // Métodos

    public function __toString()
    {
        
        $dados = "Nome: " . $this -> getNome() . "\n";
        $dados .= "RG: " . $this -> getRG() . "\n";
        $dados .= "Idade: " . $this -> getIdade() . "\n";
        $dados .= "Matrícula: " . $this -> matricula;
         
    }
    


    /**
     * Get the value of matricula
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     */
    public function setMatricula($matricula): self
    {
        $this->matricula = $matricula;

        return $this;
    }

}