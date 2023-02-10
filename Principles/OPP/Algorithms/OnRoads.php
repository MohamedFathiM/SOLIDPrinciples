<?php

namespace SOLID\OPP\Algorithms;

use SOLID\OPP\Interface\IMove;

class OnRoads implements IMove
{
    public function move(): string
    {
        return "I Move On Roads";
    }
}
