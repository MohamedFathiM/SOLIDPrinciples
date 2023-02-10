<?php

namespace SOLID\LSP\Correct;

class Shape
{
    protected int $width;
    protected int $height;

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}
