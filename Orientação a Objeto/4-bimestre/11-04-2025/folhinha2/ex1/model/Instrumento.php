<?php

class Instrumento {

    // Atributos

    protected float $nota;



    // Gets e Sets

    /**
     * Get the value of nota
     */
    public function getNota(): float
    {
        return $this->nota;
    }

    /**
     * Set the value of nota
     */
    public function setNota(float $nota): self
    {
        $this->nota = $nota;

        return $this;
    }


    
    // Métodos

    public function getNotaFinal () : float {

        return $this -> arredondaNota($this -> getNota());

        
    }

    public function arredondaNota ($notaFinal) : float {

        if ($notaFinal > 10) {

            $notaArredondada = 10;

        }
        else {

            $notaArredondada = $notaFinal;
            
        }

        return $notaArredondada;

    }


}