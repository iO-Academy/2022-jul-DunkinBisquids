<?php


require_once '../../vendor/autoload.php';

use BisquidsTin\Classes\Biscuit;
use BisquidsTin\Utilities\BiscuitDataProcessor;
use PHPUnit\Framework\Testcase;

class BiscuitDataProcessorTest extends Testcase
{
    public function testSuccessMostDunked()
    {
        $biscuitMock = $this->createMock(Biscuit::class);
        $biscuitMock->method('getName')->willReturn('Penguin');
        $biscuitMock->method('getDunk')->willReturn(10);
        $biscuitMock2 = $this->createMock(Biscuit::class);
        $biscuitMock2->method('getName')->willReturn('Digestive');
        $biscuitMock2->method('getDunk')->willReturn(1);

        $input = [$biscuitMock, $biscuitMock2];

        $expected = 'Penguin';
        $actual = BiscuitDataProcessor::mostDunked($input);
        $this->assertEquals($expected, $actual);
    }

    public function testFailureMostDunked()
    {
        $input = [];

        $expected = '';

        $actual = BiscuitDataProcessor::mostDunked($input);
        $this->assertEquals($expected, $actual);
    }

    public function testMalformedMostDunked()
    {
        $input = 'hello';
        $this->expectException(TypeError::class);
        $case = BiscuitDataProcessor::mostDunked($input);
    }

    public function testSuccessMostFlunked()
    {
        $biscuitMock = $this->createMock(Biscuit::class);
        $biscuitMock->method('getName')->willReturn('Penguin');
        $biscuitMock->method('getFlunk')->willReturn(10);
        $biscuitMock2 = $this->createMock(Biscuit::class);
        $biscuitMock2->method('getName')->willReturn('Digestive');
        $biscuitMock2->method('getFlunk')->willReturn(1);

        $input = [$biscuitMock, $biscuitMock2];

        $expected = 'Penguin';
        $actual = BiscuitDataProcessor::mostFlunked($input);
        $this->assertEquals($expected, $actual);
    }

    public function testFailureMostFlunked()
    {
        $input = [];

        $expected = '';

        $actual = BiscuitDataProcessor::mostFlunked($input);
        $this->assertEquals($expected, $actual);
    }

    public function testMalformedMostFlunked()
    {
        $input = 'hello';
        $this->expectException(TypeError::class);
        $case = BiscuitDataProcessor::mostFlunked($input);
    }
}
