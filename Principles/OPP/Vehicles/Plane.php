<?php

namespace SOLID\OPP\Vehicles;

use SOLID\OPP\Interface\IVehicle;

class Plane implements IVehicle
{
    public function __construct(
        private string $name
    ) {
    }
}
