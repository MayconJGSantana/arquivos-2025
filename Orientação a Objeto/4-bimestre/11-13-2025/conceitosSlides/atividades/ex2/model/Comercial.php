<?php

require_once("Consumer.php");
require_once("IEnergyConsumer.php");

class Comercial extends Consumer implements IEnergyConsumer {

    // Implemented methods

    public function getInvoiceValue() : float {

        if ($this -> getConsumption() <= 100) {

            $chargedValue = 1.45;

        }
        else {

            $chargedValue = 1.60;

        }

        $invoiceValue = $this -> getConsumption() * $chargedValue;

        $invoiceValue = $this -> roundInvoiceValue($invoiceValue);

        return $invoiceValue;
        
    }



    // Magic methods

    public function __toString() {

        $dado = parent::getDado($this -> getInvoiceValue());

        return $dado;

    }

}