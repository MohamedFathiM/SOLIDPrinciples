<?php

namespace SOLID\OPP\Algorithms;

use SOLID\OPP\Interface\IMove;

class InSky implements IMove
{
    public function move(): string
    {
        return "I Fly In Sky";
    }
}
