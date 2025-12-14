<?php 

require_once("Employee.php");

class Manager extends Employee {

    // Getters and Setter

    public function getPositionName(): string {

        $position = "gerente";

        return $position;

    }

    public function getAdditionalPayment(): float {

        $additionalPayment = 4.5;

        return $additionalPayment;
        
    }

}