<?php

namespace SOLID\ISP;

use SOLID\ISP\Interface\EntertainmentInterface;
use SOLID\ISP\Interface\VehicleInterface;

class Truck implements VehicleInterface, EntertainmentInterface
{
    public function startEngine(): string
    {
        return "Start Engine";
    }

    public function play(): string
    {
        return "Play Music";
    }

    public function pause(): string
    {
        return "Pause Music";
    }

    public function stop(): string
    {
        return "Start Music";
    }
}
