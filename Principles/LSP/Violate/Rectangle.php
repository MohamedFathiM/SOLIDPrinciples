<?php

namespace SOLID\LSP\Violate;

class Rectangle
{
    protected int $width;
    protected int $height;

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}
