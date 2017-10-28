<?php

namespace App\Tests;

use App\SuperCar;
use PHPUnit\Framework\TestCase;

/**
 *  Example test with mock and stub
 */
class SuperCarTest extends TestCase
{
    public function testSuperCarStub()
    {
        $stub = $this->createMock(SuperCar::class);
        $stub->method('color')->willReturn('yellow');
        $stub->method('engine')->willReturn('V14');
        $stub->method('fuel')->willReturn('diesel fuel');

        $this->assertEquals('yellow', $stub->color());
        $this->assertEquals('V14', $stub->engine());
        $this->assertEquals('diesel fuel', $stub->fuel());
    }

    public function testSuperCarObject()
    {
        $color = $this->getMockBuilder(SuperCar::class)
            ->setMethods(['color'])
            ->getMock();

        $engine = $this->getMockBuilder(SuperCar::class)
            ->setMethods(['engine'])
            ->getMock();

        $fuel = $this->getMockBuilder(SuperCar::class)
            ->setMethods(['fuel'])
            ->getMock();

        $color->expects($this->any(1))->method('color');
        $engine->expects($this->any(1))->method('engine');
        $fuel->expects($this->any(1))->method('fuel');

        $this->assertTrue(true);
    }
}
