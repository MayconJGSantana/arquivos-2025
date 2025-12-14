<?php

require_once("Client.php");

class PjClient extends Client {

    // Attributes

    private string $socialRole;
    private string $cnpj;


    //GET e SET

    public function setSocialRole(string $socialRole): self
    {
        $this->socialRole = $socialRole;

        return $this;
    }

    public function setCnpj(string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    // Implemented methods

    public function getWholeName() : string {

        return $this -> socialRole;

    }

    public function getNroDoc() : string {

        return $this -> cnpj;

    }

    public function getType() : string {

        return "J";
        
    }

    
}
