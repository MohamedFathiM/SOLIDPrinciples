<?php

namespace SOLID\LSP\Test;

use PHPUnit\Framework\TestCase;
use SOLID\LSP\Correct\Shapes\Square;
use SOLID\LSP\Violate\Square as ViolateSquare;

class LSPTest extends TestCase
{
    private Square $square;
    private ViolateSquare $violateSquare;

    protected function setUp(): void
    {
        $this->square = new Square();
        $this->square->setWidth(5);
        $this->square->setHeight(10);


        $this->violateSquare = new ViolateSquare();
        $this->violateSquare->setWidth(5);
        $this->violateSquare->setHeight(10);
    }

    public function testViolateAreaOfSquareCorrect()
    {
        $area = $this->violateSquare->calculateArea();

        $this->assertEquals(100, $area);
    }

    public function testCorrectAreaOfSquareCorrect()
    {
        $area = $this->square->calculateArea();

        $this->assertEquals(50, $area);
    }
}
