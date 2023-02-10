<?php

namespace SOLID\OCP\Vehicles;

use SOLID\OCP\Interface\IVehicle;

class Bus implements IVehicle
{
    public function __construct(
        private string $busNumber,
        private string $color,
        private int $maxSpeed,
    ) {
    }
}
