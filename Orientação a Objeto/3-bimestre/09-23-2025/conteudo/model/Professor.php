<?php
https://prod.liveshare.vsengsaas.visualstudio.com/join?F3B8CF4810AF7039FC54C0961CBB11914F92
require_once("Pessoa.php");

class Professor extends Pessoa {

    // Atributos

    private float $salario;
    

    /**
     * Get the value of salario
     */
    public function getSalario(): int
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     */
    public function setSalario(int $salario): self
    {
        $this->salario = $salario;

        return $this;
    }
}