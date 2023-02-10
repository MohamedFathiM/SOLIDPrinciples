<?php

namespace SOLID\OCP\Vehicles;

use SOLID\OCP\Interface\IVehicle;

class Plane implements IVehicle
{
    public function __construct(
        private string $name
    ) {
    }
}
