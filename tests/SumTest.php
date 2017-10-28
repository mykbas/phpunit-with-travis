<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Sum;

/**
 * Example test with assert and data provider
 */
class SumTest extends TestCase
{
    /** @var Sum */
    private $sum;

    public function setUp()
    {
        $this->sum = new Sum();
    }

    public function testSumPositiveNumbers()
    {
        $result = $this->sum->add(1, 1);
        $this->assertEquals(2, $result);
    }

    public function testSumOneNegativeNumber()
    {
        $result = $this->sum->add(1, -1);
        $this->assertEquals(0, $result);
    }

    /**
     * @dataProvider getSums
     */
    public function testSum($a, $b, $out)
    {
        $this->assertEquals($out, $a + $b);
    }

    public function getSums()
    {
        return [
            [1, 1, 2],
            [2, 2, 4],
            [4, 4, 8],
        ];
    }
}
