<?php

namespace SOLID\OPP;

use SOLID\OPP\Interface\IMove;
use SOLID\OPP\Interface\IVehicle;

class Trip
{
    private $movable;

    public function __construct(private IVehicle $vehicle, private string $name)
    {
    }

    function setMovable(IMove $movable)
    {
        $this->movable = $movable;
    }

    public function getMovable()
    {
        return $this->movable;
    }

    public function move(): string
    {
        return $this->getMovable()->move();
    }
}
