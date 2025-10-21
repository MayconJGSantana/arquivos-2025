<?php

require_once("Midia.php");

class Dvd extends Midia {

    // 

    public function getTipo() : string {

        return "DVD";

    }

}