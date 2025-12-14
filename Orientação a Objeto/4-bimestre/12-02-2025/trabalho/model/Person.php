<?php

abstract class Person {
    
    private int $id;
    private ?string $birthCity;
    private ?string $birthDate;
    private ?float $height;
    private ?string $wholeName;
    private ?int $intimacy;



    public abstract function __toString();


    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of birthCity
     */
    public function getBirthCity(): ?string
    {
        return $this->birthCity;
    }

    /**
     * Set the value of birthCity
     */
    public function setBirthCity(?string $birthCity): self
    {
        $this->birthCity = $birthCity;

        return $this;
    }

    /**
     * Get the value of birthDate
     */
    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    /**
     * Set the value of birthDate
     */
    public function setBirthDate(?string $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get the value of height
     */
    public function getHeight(): ?float
    {
        return $this->height;
    }

    /**
     * Set the value of height
     */
    public function setHeight(?float $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get the value of wholeName
     */
    public function getWholeName(): ?string
    {
        return $this->wholeName;
    }

    /**
     * Set the value of wholeName
     */
    public function setWholeName(?string $wholeName): self
    {
        $this->wholeName = $wholeName;

        return $this;
    }

    /**
     * Get the value of intimacy
     */
    public function getIntimacy(): ?int
    {
        return $this->intimacy;
    }

    /**
     * Set the value of intimacy
     */
    public function setIntimacy(?int $intimacy): self
    {
        $this->intimacy = $intimacy;

        return $this;
    }
}