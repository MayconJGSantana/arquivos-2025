<?php

require_once("Consumer.php");
require_once("IEnergyConsumer.php");

class Residencial extends Consumer implements IEnergyConsumer {

    // Implemented methods

    public function getInvoiceValue() : float {

        $invoiceValue = $this -> getConsumption() * 1.05;

        $invoiceValue = $this -> roundInvoiceValue($invoiceValue);

        return $invoiceValue;
        
    }



    // Magic methods

    public function __toString() {

        $dado = parent::getDado($this -> getInvoiceValue());

        return $dado;

    }

}