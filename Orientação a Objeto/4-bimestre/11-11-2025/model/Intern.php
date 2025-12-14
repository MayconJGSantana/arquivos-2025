<?php 

require_once("Employee.php");

class Intern extends Employee {

    // Getters and Setter

    public function getPositionName(): string {

        $position = "estagiário";

        return $position;

    }

    public function getAdditionalPayment(): float {

        $additionalPayment = 0.8;

        return $additionalPayment;
        
    }

}