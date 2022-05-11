<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    protected int $storageCapacity;

    protected int $load;

    protected string $energy;

    protected int $energyLevel;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->storageCapacity = $storageCapacity;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
        {
            if (in_array($energy, self::ALLOWED_ENERGIES)) {
                 $this->energy = $energy;
            }
            return $this;
        }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }   
    
    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void 
    {
        $this->storageCapacity = $storageCapacity;
    }
    
    public function getLoad(): int
    {
        return $this->load;
    }

    public function setLoad(int $load): void
    {
        $this->load = $load;
    }

    public function fullLoad(): string 
    {
        $sentence = "";
        while ($this->load < $this->storageCapacity) {
            $this->load+=5;
            $sentence .= "in filling";
        }
        $sentence .= "It's FULL !!!";
        return $sentence;
    }

}
