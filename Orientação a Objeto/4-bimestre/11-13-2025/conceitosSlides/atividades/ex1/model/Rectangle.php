<?php 

require_once("IGeometryForm.php");

class Rectangle implements IGeometryForm {

    // Attributes

    private float $base;
    private float $height;



    // Getters & Setters

    /**
     * Get the value of base
     */
    public function getBase(): float
    {
        return $this->base;
    }

    /**
     * Set the value of base
     */
    public function setBase(float $base): self
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get the value of height
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * Set the value of height
     */
    public function setHeight(float $height): self
    {
        $this->height = $height;

        return $this;
    }
    


    // Implemented methods

    public function getArea() : float {

        $area = $this -> getBase() * $this -> getHeight();

        $area = round($area, 2);

        return $area;

    }

    public function getDrawing() : String {

        $textRectangle = "                                              
                ████████████████████████████████████                
                ██████████████████████████████████▓▓                
                ██▓▓████████████████████████████████                
                ████████████████████████████████████                
                ████████████████████████████████████                
                ████████████████████████████████████    ";

        return $textRectangle;


    }



    // Magic methods

    public function __toString() {
            
        $dado = "Tipo: retângulo" . "\n";
        $dado .= $this -> getDrawing() . "\n";
        $dado .= "Base: " . $this -> getBase() . "\n";
        $dado .= "Altura: " . $this -> getHeight() . "\n";
        $dado .= "\t" . "Área: " . $this -> getArea();

        return $dado;

    }

}