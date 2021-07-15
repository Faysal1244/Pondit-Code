<?php
class Vehicle
{
    public $name;
    public $max_speed;
    public $milage;
    public $seating_capacity;

    function __construct($name, $max_speed, $milage, $seating_capacity)
    {
        $this->name = $name;
        $this->max_speed = $max_speed;
        $this->milage = $milage;
        $this->seating_capacity = $seating_capacity;
    }

    function Fare()
    {
        $charge = $this->seating_capacity * 100;
    }
}

class Bus extends Vehicle
{
    function __construct($name, $max_speed, $milage, $seating_capacity)
    {
        $this->name = $name;
        $this->max_speed = $max_speed;
        $this->milage = $milage;
        $this->seating_capacity = $seating_capacity;
    }

    public function Fare()
    {
        if ($this->seating_capacity > 50) {
            echo " Sorry , Seating Capacity is only 50";
        } else {
            $charge = $this->seating_capacity * 100 * 0.1;
        }
    }
}

$b = new Bus("Volvo", 60, 50, 50);

$b->Fare();
