<?php

namespace SOLID\LSP\Correct\Shapes;

use SOLID\LSP\Correct\IShap;
use SOLID\LSP\Correct\Shape;

class Rectangle extends Shape implements IShap
{
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    public function setHeight(int $height): void
    {
        $this->height = $height;
    }
}
