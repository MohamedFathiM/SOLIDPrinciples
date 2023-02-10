<?php

namespace SOLID\ISP;

use SOLID\ISP\Interface\SpeedInterface;
use SOLID\ISP\Interface\VehicleInterface;

class Motorcycle implements VehicleInterface, SpeedInterface
{
    public function startEngine(): string
    {
        return "Start Engine";
    }

    public function speed(): string
    {
        return "Iam accelerate";
    }
}
