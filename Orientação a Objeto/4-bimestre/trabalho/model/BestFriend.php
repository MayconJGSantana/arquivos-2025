<?php

require_once("Person.php");

class BestFriend extends Friend {

    private string $favoriteColor;
    private string $favoriteFood;
    private string $lifeDream;

    /**
     * Get the value of favoriteColor
     */
    public function getFavoriteColor(): string
    {
        return $this->favoriteColor;
    }

    /**
     * Set the value of favoriteColor
     */
    public function setFavoriteColor(string $favoriteColor): self
    {
        $this->favoriteColor = $favoriteColor;

        return $this;
    }

    /**
     * Get the value of favoriteFood
     */
    public function getFavoriteFood(): string
    {
        return $this->favoriteFood;
    }

    /**
     * Set the value of favoriteFood
     */
    public function setFavoriteFood(string $favoriteFood): self
    {
        $this->favoriteFood = $favoriteFood;

        return $this;
    }

    /**
     * Get the value of lifeDream
     */
    public function getLifeDream(): string
    {
        return $this->lifeDream;
    }

    /**
     * Set the value of lifeDream
     */
    public function setLifeDream(string $lifeDream): self
    {
        $this->lifeDream = $lifeDream;

        return $this;
    }

    public function __toString()
    {
        $datas = parent::__toString() . " | ";

        $datas .= "Cor favorita: " . $this -> getFavoriteColor() . " | ";
        $datas .= "Comida favorita: " . $this -> getFavoriteFood() . " | ";
        $datas .= "Sonho da vida: " . $this -> getLifeDream();

        return $datas;
    }

}