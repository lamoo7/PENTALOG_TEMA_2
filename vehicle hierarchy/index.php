<?php

abstract class Vehicle {
    protected $type;

    public function __construct($type) {
        $this->type = $type;
    }

    abstract public function start();
    abstract public function stop();
    abstract public function honk();
}

class Car extends Vehicle {
    public function start() {
        echo "{$this->type} is starting.\n";
    }

    public function stop() {
        echo "{$this->type} is stopping.\n";
    }

    public function honk() {
        echo "{$this->type} is honking.\n";
    }
}

class Bike extends Vehicle {
    public function start() {
        echo "{$this->type} is starting.\n";
    }

    public function stop() {
        echo "{$this->type} is stopping.\n";
    }

    public function honk() {
        echo "{$this->type} doesn't have a horn.\n";
    }
}

$car = new Car("Car");
$car->start();
$car->honk();
$car->stop();

$bike = new Bike("Bike");
$bike->start();
$bike->honk();
$bike->stop();

?>