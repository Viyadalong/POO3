<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    const CAPACITY = 30;

    private $capacity;

    private $qty;

    private $energy;

    public function __construct(string $color, int $nbSeats, int $capacity, string $energy, int $qty)
    {
        parent::__construct($color, $nbSeats);
        $this->setCapacity($capacity);
        $this->setEnergy($energy);
        $this->setQty($qty);
        $this->capacity = self::CAPACITY;
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }

    public function getQty(): int
    {
        return $this->qty;
    }

    public function setQty(int $qty): void
    {
        $this->qty = $qty;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy) : Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function inFilling(): string
    {
         
        if($this->qty === self::CAPACITY){
            return 'Stop, the truck is full';
        }
        else{
            return 'The truck is in filling';
        }
    }
}