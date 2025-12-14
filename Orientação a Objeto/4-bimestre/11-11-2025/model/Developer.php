<?php 

require_once("Employee.php");

class Developer extends Employee {

    // Getters and Setter

    public function getPositionName(): string {

        $position = "desenvolvedor";

        return $position;

    }

    public function getAdditionalPayment(): float {

        $additionalPayment = 2.3;

        return $additionalPayment;
        
    }

}