<?php

require_once("Midia.php");

class Cd extends Midia {

    // Métodos

    public function getTipo() : string {

        return "CD";

    }

}