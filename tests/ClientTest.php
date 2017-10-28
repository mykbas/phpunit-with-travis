<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use Prophecy\Prophet;
use Prophecy\Argument;
use App\WriterInterface;
use App\Client;

/**
 * Example test with Spies
 */
class ClientTest extends TestCase
{
    private $prophetInstance;

    protected function setUp()
    {
        $this->prophetInstance = new Prophet();
    }

    public function testWeShouldBeAbleToWriteDownAnyInformation()
    {
        $mock = $this->prophetInstance->prophesize(WriterInterface::class);

        $mock->write(Argument::Any())
            ->shouldBeCalled()
            ->willReturn(true);

        $client = new Client($mock->reveal());

        $this->assertTrue($client->save("something"));
    }
}

