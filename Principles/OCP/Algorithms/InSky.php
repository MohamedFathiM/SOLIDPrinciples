<?php

namespace SOLID\OCP\Algorithms;

use SOLID\OCP\Interface\IMove;

class InSky implements IMove
{
    public function move(): string
    {
        return "I Fly In Sky";
    }
}
