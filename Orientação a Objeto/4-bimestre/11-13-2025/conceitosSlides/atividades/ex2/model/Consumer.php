<?php 

abstract class Consumer {

    // Attributes

    protected float $consumption;
    


    // Getters & Setters

    /**
     * Get the value of consumption
     */
    public function getConsumption(): float
    {
        return $this->consumption;
    }

    /**
     * Set the value of consumption
     */
    public function setConsumption(float $consumption): self
    {
        $this->consumption = $consumption;

        return $this;
    }


    
    // Methods

    public function roundInvoiceValue($roundedInvoiceValue) : float {

        $roundedInvoiceValue = round($this -> getConsumption(), 2);

        return $roundedInvoiceValue;

    }


    public function formatInvoiceValue($invoiceValue) : String {

        $formattedInvoiceValue = number_format($invoiceValue, 2, ",", ".");

        return $formattedInvoiceValue;

    }



    // Methods

    public function getDado($invoiceValue) {

        $dado = "Gasto de kilowatts por hora: " . $this -> formatInvoiceValue($invoiceValue) . "\n";
        $dado .= "Valor gasto: " . $this -> $invoiceValue;

        return $dado;
        
    }

}