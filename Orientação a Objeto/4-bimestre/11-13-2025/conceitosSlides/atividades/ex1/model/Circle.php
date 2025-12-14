<?php 

require_once("IGeometryForm.php");

class Circle implements IGeometryForm {

    // Attributes

    private float $radius;



    // Getters & Setters

    /**
     * Get the value of radius
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * Set the value of radius
     */
    public function setRadius(float $radius): self
    {
        $this->radius = $radius;

        return $this;
    }
    


    // Implemented methods

    public function getArea() : float {

        $area = pi() * pow($this -> getRadius(), 2);

        $area = round($area, 2);

        return $area;

    }

    public function getDrawing() : String {

        $textCircle = "
                   ooo OOO OOO ooo
               oOO                 OOo
           oOO                         OOo
        oOO                               OOo
      oOO                                   OOo
    oOO                                       OOo
   oOO                                         OOo
  oOO                                           OOo
 oOO                                             OOo
 oOO                                             OOo
 oOO                                             OOo
 oOO                                             OOo
 oOO                                             OOo
  oOO                                           OOo
   oOO                                         OOo
    oOO                                       OOo
      oOO                                   OOo
        oO                                OOo
           oOO                         OOo
               oOO                 OOo
                   ooo OOO OOO ooo";

        return $textCircle;


    }



    // Magic methods

    public function __toString() {
            
        $dado = "Tipo: círculo" . "\n";
        $dado .= $this -> getDrawing() . "\n";
        $dado .= "Raio: " . $this -> getRadius() . "\n";
        $dado .= "\t" . "Área: " . $this -> getArea();

        return $dado;

    }

}