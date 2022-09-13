<?php

require_once '../../vendor/autoload.php';

use BisquidsTin\Classes\Biscuit;
use BisquidsTin\ViewHelpers\BiscuitViewHelper;
use PHPUnit\Framework\Testcase;

class BiscuitViewHelperTest extends Testcase
{
    public function testSuccessDisplayAllBiscuits() {
        $biscuitMock = $this->createMock(Biscuit::class);
        $biscuitMock->method('getName')->willReturn('Digestive');
        $biscuitMock->method('getImg')->willReturn('https://s3-us-west-1.amazonaws.com/contentlab.studiod/getty/d05662cfb32042c9894dddf8ed73ce22.jpg');
        $biscuitMock->method('getId')->willReturn(1);
        
        $input = [$biscuitMock];

        $expected = '<div class="card d-flex flex-direction-column align-items-center p-3 m-4 col-10 col-lg-3">';
        $expected .= '<div class="card-title card-background rounded">';
        $expected .= '<h2 class="text-center p-2">Digestive</h2>';
        $expected .= '</div><div class="card-img d-flex justify-content-center mb-3">';
        $expected .= '<img src="https://s3-us-west-1.amazonaws.com/contentlab.studiod/getty/d05662cfb32042c9894dddf8ed73ce22.jpg" class="rounded mw-100" alt="Digestive" />';
        $expected .= '</div><form action="biscuitdetails.php" method="GET">';
        $expected .= '<input name="id" type="hidden" value="1" />';
        $expected .= '<button type="submit" class="btn btn-light">More Info</button>';
        $expected .= '</form></div>';

        $actual = BiscuitViewHelper::displayAllBiscuits($input);
        $this->assertEquals($expected, $actual);
    }

    public function testFailureDisplayAllBiscuits()
    {
        $input = [1, 2];
        
        $expected = '';
        
        $actual = BiscuitViewHelper::displayAllBiscuits($input);
        $this->assertEquals($expected, $actual);
    }

    public function testMalformedDisplayAllBiscuits()
    {
        $input = 'hello';
        $this->expectException(TypeError::class);
        $case = BiscuitViewHelper::displayAllBiscuits($input);
    }
}