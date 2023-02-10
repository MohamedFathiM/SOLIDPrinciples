<?php

namespace SOLID\OCP\Algorithms;

use SOLID\OCP\Interface\IMove;

class OnRoads implements IMove
{
    public function move(): string
    {
        return "I Move On Roads";
    }
}
