<?php

require_once("Mago.php");

class Curandeiro extends Mago {

    // Atributos

    private int $forcaDeCura;
    

    // Métodos

    public function lancarPoder() {

        printf("O mago %s, do tipo Curandeiro, possui força de %d e lançou o poder %s com força total de %.0f.", $this -> nome, $this -> forcaDeCura, $this -> poder -> getDescricao(), $this -> poder -> getForcaTotal($this -> forcaDeCura));
        
    }
    

    /**
     * Get the value of forcaDeCura
     */
    public function getForcaDeCura(): int
    {
        return $this->forcaDeCura;
    }

    /**
     * Set the value of forcaDeCura
     */
    public function setForcaDeCura(int $forcaDeCura): self
    {
        $this->forcaDeCura = $forcaDeCura;

        return $this;
    }

}