<?php

require_once 'Bicycle.php';
$bike = new Bicycle('blue');
var_dump($bike);

$bike->setCurrentSpeed(0);
var_dump($bike);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

require_once 'Car.php';
$coccinelle = new Car('red', 4, 'petrol');
var_dump($coccinelle);

echo $coccinelle->start();
echo $coccinelle->forward();
echo '<br> Vitesse de la voiture : ' . $coccinelle->getCurrentSpeed() . ' km/h' . '<br>';
echo $coccinelle->brake();
echo '<br> Vitesse de la voiture : ' . $coccinelle->getCurrentSpeed() . ' km/h' . '<br>';
echo $coccinelle->brake();
