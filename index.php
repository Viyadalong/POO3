<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);


$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);

$truck = new Truck('red', 2, 30, 'fuel', 15);
echo $truck->forward();
var_dump($truck);
echo '<br> Truck speed : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Truck speed : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br>';

echo '<br>';
echo $truck->inFilling();
echo '<br>';
var_dump($truck);

$truck2 = new Truck('red', 2, 0,'fuel', 30);
echo '<br>';
echo $truck2->inFilling();
echo '<br>';
var_dump($truck2);

$pedestrian = new PedestrianWay(2, 30);
echo $pedestrian->addVehicle($bicycle);