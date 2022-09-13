<?php

require_once '../../vendor/autoload.php';

use BisquidsTin\Classes\Biscuit;
use BisquidsTin\ViewHelpers\BiscuitViewHelper;
use PHPUnit\Framework\Testcase;

class DetailsViewHelperTest extends Testcase
{
    public function testSuccessDisplayBiscuitDetails() {
        $biscuitMock = $this->createMock(Biscuit::class);
        $biscuitMock->method('getName')->willReturn('Digestive');
        $biscuitMock->method('getImg')->willReturn('https://s3-us-west-1.amazonaws.com/contentlab.studiod/getty/d05662cfb32042c9894dddf8ed73ce22.jpg');
        $biscuitMock->method('getId')->willReturn(1);
        $biscuitMock->method('getDescription')->willReturn('A digestive biscuit, sometimes described as a sweet-meal biscuit, is a semi-sweet biscuit that originated in Scotland. The digestive was first developed in 1839 by two Scottish doctors to aid digestion.');
        $biscuitMock->method('getRDT')->willReturn(5);
        $biscuitMock->method('getWikipedia')->willReturn('https://en.wikipedia.org/wiki/Digestive_biscuit');

        $input = $biscuitMock;

        $expected = '<div class="card d-flex flex-direction-column align-items-center p-3 m-4 col-10">';
        $expected .= '<div class="card-title card-background rounded">';
        $expected .= '<h2 class="text-center p-2">Digestive</h2>';
        $expected .= '</div><div class="card-img d-flex justify-content-center mb-3">';
        $expected .= '<img src="https://s3-us-west-1.amazonaws.com/contentlab.studiod/getty/d05662cfb32042c9894dddf8ed73ce22.jpg" class="rounded mw-100" alt="Digestive" />';
        $expected .= '</div><div class="card-background rounded p-3"><p>A digestive biscuit, sometimes described as a sweet-meal biscuit, is a semi-sweet biscuit that originated in Scotland. The digestive was first developed in 1839 by two Scottish doctors to aid digestion.</p>';
        $expected .= '<p>RDT: 5</p>';
        $expected .= '<p>Wikipedia: <a href="https://en.wikipedia.org/wiki/Digestive_biscuit">Digestive</a></p></div>';

        $actual = BiscuitViewHelper::displayBiscuitDetails($input);
        $this->assertEquals($expected, $actual);
    }

    public function testFailureDisplayBiscuitDetails()
    {
        $biscuitMock = $this->createMock(Biscuit::class);
        $biscuitMock->method('getName')->willReturn('');
        $biscuitMock->method('getImg')->willReturn('https://s3-us-west-1.amazonaws.com/contentlab.studiod/getty/d05662cfb32042c9894dddf8ed73ce22.jpg');
        $biscuitMock->method('getId')->willReturn(1);
        $biscuitMock->method('getDescription')->willReturn('A digestive biscuit, sometimes described as a sweet-meal biscuit, is a semi-sweet biscuit that originated in Scotland. The digestive was first developed in 1839 by two Scottish doctors to aid digestion.');
        $biscuitMock->method('getRDT')->willReturn(5);
        $biscuitMock->method('getWikipedia')->willReturn('https://en.wikipedia.org/wiki/Digestive_biscuit');

        $input = $biscuitMock;
        
        $expected = 'no biscuit selected';
        
        $actual = BiscuitViewHelper::displayBiscuitDetails($input);
        $this->assertEquals($expected, $actual);
    }

    public function testMalformedDisplayBiscuitDetails()
    {
        $input = 'hello';
        $this->expectException(TypeError::class);
        $case = BiscuitViewHelper::displayBiscuitDetails($input);
    }
}