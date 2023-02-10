<?php

namespace SOLID\OPP\Vehicles;

use SOLID\OPP\Interface\IVehicle;

class Bus implements IVehicle
{
    public function __construct(
        private string $busNumber,
        private string $color,
        private int $maxSpeed,
    ) {
    }
}
