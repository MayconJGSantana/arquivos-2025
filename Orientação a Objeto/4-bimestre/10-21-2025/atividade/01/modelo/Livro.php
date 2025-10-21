<?php

require_once("Produto.php");

class Livro extends Produto {

    // Atributos

    private string $autor;


    // Métodos

    public function __toString() : string {

        $dados = parent::__toString() . "\n";
        $dados .= "Autor: " . $this -> getAutor();

        return $dados;
        
    }

    /**
     * Get the value of autor
     */
    public function getAutor(): string
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor(string $autor): self
    {
        $this->autor = $autor;

        return $this;
    }
}