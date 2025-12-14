<?php

require_once("Client.php");

class Pfclient extends Client {

    // Attributes

    private string $name;
    private string $cpf;


    // Getters and Setters
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    // Implemented methods

    public function getWholeName() : string {

        return $this -> name;

    }

    public function getNroDoc() : string {

        return $this -> cpf;

    }

    public function getTipo() : string {

        return "F";
        
    }

}