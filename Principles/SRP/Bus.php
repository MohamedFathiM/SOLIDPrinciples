<?php

namespace SOLID\SRP;

use SOLID\OCP\Interface\IVehicle;

class Bus implements IVehicle
{
    public function __construct(
        private string $busNumber,
        private string $color,
        private int $maxSpeed,
        private Driver $driver,
        private Route $route
    ) {
    }
}
