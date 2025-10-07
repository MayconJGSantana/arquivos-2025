<?php

class Combatente {

    // Atributos

    private int $forcaDeAtaque;


    // Métodos

    public function lancarPoder() {

        printf("O mago %s, do tipo Combatente, possui força de %d e lançou o poder %s com força total de %d.");
        
    }

    /**
     * Get the value of forcaDeAtaque
     */
    public function getForcaDeAtaque(): int
    {
        return $this->forcaDeAtaque;
    }

    /**
     * Set the value of forcaDeAtaque
     */
    public function setForcaDeAtaque(int $forcaDeAtaque): self
    {
        $this->forcaDeAtaque = $forcaDeAtaque;

        return $this;
    }
}