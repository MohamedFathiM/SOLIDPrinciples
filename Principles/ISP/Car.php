<?php

namespace SOLID\ISP;

use SOLID\ISP\Interface\EntertainmentInterface;
use SOLID\ISP\Interface\SpeedInterface;
use SOLID\ISP\Interface\VehicleInterface;

class Car implements VehicleInterface, SpeedInterface, EntertainmentInterface
{
    public function startEngine(): string
    {
        return "Start Engine";
    }

    public function speed(): string
    {
        return "Iam accelerate";
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
