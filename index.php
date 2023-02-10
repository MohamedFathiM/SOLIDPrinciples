<?php

use SOLID\OCP\Algorithms\InSky;
use SOLID\OCP\Algorithms\OnRoads;
use SOLID\OCP\Trip;
use SOLID\OCP\Vehicles\Plane;
use SOLID\SRP\Bus;
use SOLID\SRP\Driver;
use SOLID\SRP\Route;

require_once __DIR__ . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";


$plane = new Plane("Plane 01");
$planeTrip = new Trip($plane, "T002");
$planeTrip->setMovable(new InSky);
echo $planeTrip->move() . "<br />";


$bus = new Bus(
    "122345",
    "Red",
    135,
    new Driver("Mohamed Fathi", 28),
    new Route("Alex", "Damietta")
);
$trip = new Trip($bus, 'T001');
$trip->setMovable(new OnRoads);
echo $trip->move();
