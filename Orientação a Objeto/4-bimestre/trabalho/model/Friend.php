<?php

require_once("Person.php");

class Friend extends Person {

    private ?string $quality;
    
    
    /**
     * Get the value of quality
     */
    public function getQuality(): ?string
    {
        return $this->quality;
    }

    /**
     * Set the value of quality
     */
    public function setQuality(?string $quality): self
    {
        $this->quality = $quality;

        return $this;
    }

    public function __toString()
    {
        $datas = "Id: " . $this -> getId();
        $datas .= " | Cidade de nascimento: " . $this -> getBirthCity();
        $datas .= " | " . $this -> getBirthDate();
        $datas .= " | " . $this -> getHeight();
        $datas .= " | " . $this -> getIntimacy();
        $datas .= " | " . $this -> getQuality();

        return $datas;
    }
}