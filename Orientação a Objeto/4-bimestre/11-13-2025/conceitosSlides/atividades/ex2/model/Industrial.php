<?php

require_once("Consumer.php");
require_once("IEnergyConsumer.php");

class Industrial extends Consumer implements IEnergyConsumer {

    // Implemented methods

    public function getInvoiceValue() : float {

        if ($this -> getConsumption() <= 500) {

            $chargedValue = 1.80;

        }
        else {

            $chargedValue = 2.30;

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