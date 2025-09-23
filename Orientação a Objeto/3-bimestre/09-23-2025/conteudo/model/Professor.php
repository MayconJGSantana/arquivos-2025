<?php
https://prod.liveshare.vsengsaas.visualstudio.com/join?B076154AE9BCBBCEB75A8A3128CE8F49EA98

require_once("Pessoa.php");

class Professor extends Pessoa {

    // Atributos

    private float $salario;
    
Orientação a Objeto/3-bimestre/09-23-2025/conteudo/model/Professor.php
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