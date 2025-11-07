<?php

require_once("Instrumento.php");

class Trabalho extends Instrumento {

    // Métodos

    public function getNotaFinal () : float {

        $notaFinal = parent::getNotaFinal() + parent::getNotaFinal() * 0.2;

        return $this -> arredondaNota($notaFinal);
        
    }
}