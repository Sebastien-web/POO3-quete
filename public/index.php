<?php
require_once '../vendor/autoload.php';

$kingsWay = new Engin\MotorWay();
$princessStreet = new Engin\ResidentialWay();
$sunLane = new Engin\PedestrianWay();
$simca = new Engin\Car('blue', 3, 'electric');
$renault = new Engin\Car('green', 3, 'electric');
$peugeot = new Engin\Bicycle('green',1);

$sunLane->addVehicle($simca);
$sunLane->addVehicle($peugeot);

var_dump($sunLane->getcurrentVehicles());