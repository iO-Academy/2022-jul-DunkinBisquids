<?php

require_once '../../vendor/autoload.php';

use BisquidsTin\Classes\Biscuits;
use BisquidsTin\ViewHelpers\BiscuitsViewHelper;
use PHPUnit\Framework\Testcase;

class BiscuitsViewHelperTest extends Testcase
{
    public function testSuccessDisplayAllBiscuits() {
        $biscuitMock = $this->createMock(Biscuits::class);
        $biscuitMock->method('getName')->willReturn('Digestive');
        $biscuitMock->method('getImg')->willReturn('img.jpg');
        $biscuitMock->method('getId')->willReturn(3);
        
        $input = [$biscuitMock];

        $expected = '<div class="card d-flex flex-direction-column align-items-center p-3 m-4 col-10 col-lg-3">';
        $expected .= '<div class="card-title rounded">';
        $expected .= '<h2 class="text-center p-2">Digestive</h2>';
        $expected .= '</div><div class="card-img d-flex justify-content-center mb-3">';
        $expected .= '<img src="img.jpg" class="rounded mw-100" alt="Digestive" />';
        $expected .= '</div><form action="biscuitDetails.php" method="POST"><input type="hidden" value="3" >';
        $expected .= '<button type="submit" class="btn btn-light">More Info</button></form>';
        $expected .= '<div class="d-flex container-fluid justify-content-around"><form action="hiddenVoting.php" method="POST">';
        $expected .= '<input type="hidden" name="dunk" value="3" ><button type="submit" class="btn btn-success">Dunk</button></form>';
        $expected .= '<form action="hiddenVoting.php" method="POST"><input type="hidden" name="flunk" value="3" >';
        $expected .= '<button type="submit" class="btn btn-danger">Flunk</button></form></div></div>';
        $actual = BiscuitsViewHelper::displayAllBiscuits($input);
        $this->assertEquals($expected, $actual);
    }

    public function testFailureDisplayAllBiscuits()
    {
        $input = [1, 2];
        
        $expected = '';
        
        $actual = BiscuitsViewHelper::displayAllBiscuits($input);
        $this->assertEquals($expected, $actual);
    }

    public function testMalformedMDisplayAllBiscuits()
    {
        $input = 'hello';
        $this->expectException(TypeError::class);
        $case = BiscuitsViewHelper::displayAllBiscuits($input);
    }
}