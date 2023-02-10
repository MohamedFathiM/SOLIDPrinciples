<?php

namespace SOLID\LSP\Correct\Shapes;

use SOLID\LSP\Correct\IShap;
use SOLID\LSP\Correct\Shape;

class Square extends Shape implements IShap
{
    public function setWidth($width): void
    {
        $this->width = $width;
    }

    public function setHeight($height): void
    {
        $this->height = $height;
    }
}
