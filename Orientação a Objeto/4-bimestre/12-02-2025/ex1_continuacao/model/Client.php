<?php

abstract class Client {

    // Attributes

    private int $id;
    private string $socialName;
    private string $email;



    // Getters and Setters
    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getSocialName(): string
    {
        return $this->socialName;
    }

    public function setSocialName(string $socialName): self
    {
        $this->socialName = $socialName;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }



    // Abstract methods

    abstract public function getWholeName() : string;

    abstract public function getNroDoc() : string;

    abstract public function getType() : string;
    
    public function __toString()
    {
        $dados = $this -> getType() . " | ";
        $dados .= $this -> id . " | ";
        $dados .= $this -> socialName . " | ";
        $dados .= $this -> email . " | ";
        $dados .= $this -> getWholeName() . " | ";
        $dados .= $this -> getNroDoc();
        
        return $dados;
    }

}