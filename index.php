<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

var_dump(Car::ALLOWED_ENERGIES);

$bicycle = new Bicycle('blue', 1);
var_dump($bicycle);
echo $bicycle->forward();
echo $bicycle->brake();


$car = new Car('green', 4, 'electric');
var_dump($car);
echo $car->forward();
echo $car->brake();

$truck = new Truck('grey', 3, 'fuel', 30);
$truck->setLoad(5);
var_dump($truck);
echo $truck->forward();
echo $truck->brake();
echo $truck->fullLoad();

