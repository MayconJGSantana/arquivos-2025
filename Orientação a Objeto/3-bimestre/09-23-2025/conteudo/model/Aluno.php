<?php

require_once("Pessoa.php"); 

class Aluno extends Pessoa {

    // Atributos

    private string $matricula;

    // Métodos

    


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