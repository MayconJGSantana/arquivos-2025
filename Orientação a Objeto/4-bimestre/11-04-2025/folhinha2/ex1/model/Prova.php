<?php

require_once("Instrumento.php");

class Prova extends Instrumento {

    // Método

    public function getNotaFinal() : float {

        $notaFinal = parent::getNotaFinal() + parent::getNotaFinal() * 0.3;

        return $this -> arredondaNota($notaFinal);

    }


}