<?php


require_once '../../vendor/autoload.php';

use BisquidsTin\Classes\Biscuit;
use BisquidsTin\Utilities\FaveBiscuitDataProcessor;
use PHPUnit\Framework\Testcase;

class FaveBiscuitDataProcessorTest extends Testcase
{
    public function testSuccessGetFaveBiscuitData()
    {
        $input = ['1' => true];
        $expected = '1';
        $actual = FaveBiscuitDataProcessor::getFaveBiscuitData($input);
        $this->assertEquals($expected, $actual);
    }

    public function testFailureGetFaveBiscuitData()
    {
        $input = [];

        $expected = 'No data available';

        $actual = FaveBiscuitDataProcessor::getFaveBiscuitData($input);
        $this->assertEquals($expected, $actual);
    }

    public function testMalformedGetFaveBiscuitData()
    {
        $input = 'hello';
        $this->expectException(TypeError::class);
        $case = FaveBiscuitDataProcessor::getFaveBiscuitData($input);
    }
}
