<?php

namespace SOLID\SRP;

class Route
{
    public function __construct(
        private string $from,
        private string $to,
    ) {
    }

    public function getPath()
    {
        return "From " . $this->from . "To " . $this->to;
    }
}
