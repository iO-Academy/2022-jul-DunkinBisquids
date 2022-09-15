<?php

require_once '../../vendor/autoload.php';

use BisquidsTin\Classes\Biscuit;
use BisquidsTin\ViewHelpers\BiscuitViewHelper;
use PHPUnit\Framework\Testcase;

class BiscuitViewHelperTest extends Testcase
{
    public function testSuccessDisplayAllBiscuitsNull() 
    {
        $biscuitMock = $this->createMock(Biscuit::class);
        $biscuitMock->method('getName')->willReturn('Digestive');
        $biscuitMock->method('getImg')->willReturn('img.jpg');
        $biscuitMock->method('getId')->willReturn(3);
        $input2 =[];
        $input = [$biscuitMock];
        $exp = '<div id="3" class="card d-flex flex-direction-column align-items-center p-3 m-4 col-10 col-lg-3"><div class="card-title card-background rounded"><h2 class="text-center p-2">Digestive</h2></div><div class="card-img d-flex justify-content-center mb-3"><img src="img.jpg" class="rounded mw-100" alt="Digestive" /></div><form action="biscuitdetails.php" method="GET"><input type="hidden" name="id" value="3" /><button type="submit" class="btn btn-light">More Info</button></form><div class="d-flex container-fluid justify-content-around"><form action="hiddenDunk.php" method="POST"><input type="hidden" name="id" value="3" ><button type="submit"class="btn btn-success"><img class="list-icon" alt="Dunk cookie" src="design/Dunk_Icon.png" /></button></form><form action="hiddenFlunk.php" method="POST"><input type="hidden" name="id" value="3" ><button type="submit"class="btn btn-danger"><img class="list-icon" alt="Flunk cookie" src="design/Flunk_Icon.png" /></button></form></div></div>';
        $actual = BiscuitViewHelper::displayAllBiscuits($input, $input2);
        $this->assertEquals($exp, $actual);
    }

    public function testSuccessDisplayAllBiscuitsDunk() 
    {
        $biscuitMock = $this->createMock(Biscuit::class);
        $biscuitMock->method('getName')->willReturn('Digestive');
        $biscuitMock->method('getImg')->willReturn('img.jpg');
        $biscuitMock->method('getId')->willReturn(3);
        $input2 = ['3' => true];
        $input = [$biscuitMock];
        $exp = '<div id="3" class="card d-flex flex-direction-column align-items-center p-3 m-4 col-10 col-lg-3"><div class="card-title card-background rounded"><h2 class="text-center p-2">Digestive</h2></div><div class="card-img d-flex justify-content-center mb-3"><img src="img.jpg" class="rounded mw-100" alt="Digestive" /></div><form action="biscuitdetails.php" method="GET"><input type="hidden" name="id" value="3" /><button type="submit" class="btn btn-light">More Info</button></form><div class="card-background rounded text-center m-1 fw-bold"><p class="my-auto">You have dunked that biscuit!</p></div><div class="d-flex container-fluid justify-content-around"><form action="hiddenDunk.php" method="POST"><input type="hidden" name="id" value="3" ><button type="submit" disabled class="btn btn-success"><img class="list-icon" alt="Dunk cookie" src="design/Dunk_Icon.png" /></button></form><form action="hiddenFlunk.php" method="POST"><input type="hidden" name="id" value="3" ><button type="submit"class="btn btn-danger"><img class="list-icon" alt="Flunk cookie" src="design/Flunk_Icon.png" /></button></form></div></div>';
        $actual = BiscuitViewHelper::displayAllBiscuits($input, $input2);
        $this->assertEquals($exp, $actual);
    }


    public function testSuccessDisplayAllBiscuitsFlunk() 
    {
        $biscuitMock = $this->createMock(Biscuit::class);
        $biscuitMock->method('getName')->willReturn('Digestive');
        $biscuitMock->method('getImg')->willReturn('img.jpg');
        $biscuitMock->method('getId')->willReturn(3);
        $input2 = ['3' => false];
        $input = [$biscuitMock];
        $exp = '<div id="3" class="card d-flex flex-direction-column align-items-center p-3 m-4 col-10 col-lg-3"><div class="card-title card-background rounded"><h2 class="text-center p-2">Digestive</h2></div><div class="card-img d-flex justify-content-center mb-3"><img src="img.jpg" class="rounded mw-100" alt="Digestive" /></div><form action="biscuitdetails.php" method="GET"><input type="hidden" name="id" value="3" /><button type="submit" class="btn btn-light">More Info</button></form><div class="card-background rounded text-center m-1 fw-bold"><p class="my-auto">You have flunked that biscuit!</p></div><div class="d-flex container-fluid justify-content-around"><form action="hiddenDunk.php" method="POST"><input type="hidden" name="id" value="3" ><button type="submit"class="btn btn-success"><img class="list-icon" alt="Dunk cookie" src="design/Dunk_Icon.png" /></button></form><form action="hiddenFlunk.php" method="POST"><input type="hidden" name="id" value="3" ><button type="submit" disabled class="btn btn-danger"><img class="list-icon" alt="Flunk cookie" src="design/Flunk_Icon.png" /></button></form></div></div>';
        $actual = BiscuitViewHelper::displayAllBiscuits($input, $input2);
        $this->assertEquals($exp, $actual);
    }

    public function testFailureDisplayAllBiscuits()
    {
        $input = [1, 2];
        $input2 =['dunkedFlunked' => ['1' => true]];
        $expected = '';
        $actual = BiscuitViewHelper::displayAllBiscuits($input, $input2);
        $this->assertEquals($expected, $actual);
    }

    public function testMalformedDisplayAllBiscuits()
    {
        $input = 'hello';
        $input2 =['dunkedFlunked' => ['1' => true]];
        $this->expectException(TypeError::class);
        $case = BiscuitViewHelper::displayAllBiscuits($input, $input2);
    }

    public function testSuccessDisplayBiscuitDetailsNull() 
    {
        $biscuitMock = $this->createMock(Biscuit::class);
        $biscuitMock->method('getName')->willReturn('Digestive');
        $biscuitMock->method('getImg')->willReturn('https://s3-us-west-1.amazonaws.com/contentlab.studiod/getty/d05662cfb32042c9894dddf8ed73ce22.jpg');
        $biscuitMock->method('getId')->willReturn(1);
        $biscuitMock->method('getDescription')->willReturn('A digestive biscuit, sometimes described as a sweet-meal biscuit, is a semi-sweet biscuit that originated in Scotland. The digestive was first developed in 1839 by two Scottish doctors to aid digestion.');
        $biscuitMock->method('getRDT')->willReturn(5);
        $biscuitMock->method('getWikipedia')->willReturn('https://en.wikipedia.org/wiki/Digestive_biscuit');
        $input = $biscuitMock;
        $input2 =[];
        $exp = '<div class="card d-flex flex-direction-column align-items-center p-3 m-4 col-10"><div class="card-title card-background rounded"><h2 class="text-center p-2">Digestive</h2></div><div class="card-img d-flex justify-content-center mb-3"><img src="https://s3-us-west-1.amazonaws.com/contentlab.studiod/getty/d05662cfb32042c9894dddf8ed73ce22.jpg" class="rounded mw-100" alt="Digestive" /></div><div class="card-background rounded p-3"><p>A digestive biscuit, sometimes described as a sweet-meal biscuit, is a semi-sweet biscuit that originated in Scotland. The digestive was first developed in 1839 by two Scottish doctors to aid digestion.</p><p>Recommended Dunk Time: 5</p><p>Wikipedia: <a href="https://en.wikipedia.org/wiki/Digestive_biscuit">Digestive</a></p></div><div class="container-fluid mt-2 d-flex justify-content-around"><form action="hiddenDunk.php" method="POST"><input type="hidden" name="id" value="1" ><input type="hidden" name="redirectionID" value="1" ><button type="submit" class="btn btn-success"><img class="details-icon" alt="Dunk cookie" src="design/Dunk_Icon.png" /></button></form><form action="hiddenFlunk.php" method="POST"><input type="hidden" name="id" value="1" ><input type="hidden" name="redirectionID" value="1" ><button type="submit" class="btn btn-danger"><img class="details-icon" alt="Flunk cookie" src="design/Flunk_Icon.png" /></button></form></div></div>';
        $actual = BiscuitViewHelper::displayBiscuitDetails($input, $input2);
        $this->assertEquals($exp, $actual);
    }

    public function testSuccessDisplayBiscuitDetailsDunk() 
    {
        $biscuitMock = $this->createMock(Biscuit::class);
        $biscuitMock->method('getName')->willReturn('Digestive');
        $biscuitMock->method('getImg')->willReturn('https://s3-us-west-1.amazonaws.com/contentlab.studiod/getty/d05662cfb32042c9894dddf8ed73ce22.jpg');
        $biscuitMock->method('getId')->willReturn(1);
        $biscuitMock->method('getDescription')->willReturn('A digestive biscuit, sometimes described as a sweet-meal biscuit, is a semi-sweet biscuit that originated in Scotland. The digestive was first developed in 1839 by two Scottish doctors to aid digestion.');
        $biscuitMock->method('getRDT')->willReturn(5);
        $biscuitMock->method('getWikipedia')->willReturn('https://en.wikipedia.org/wiki/Digestive_biscuit');
        $input = $biscuitMock;
        $input2 =['1' => true];
        $exp = '<div class="card d-flex flex-direction-column align-items-center p-3 m-4 col-10"><div class="card-title card-background rounded"><h2 class="text-center p-2">Digestive</h2></div><div class="card-img d-flex justify-content-center mb-3"><img src="https://s3-us-west-1.amazonaws.com/contentlab.studiod/getty/d05662cfb32042c9894dddf8ed73ce22.jpg" class="rounded mw-100" alt="Digestive" /></div><div class="card-background rounded p-3"><p>A digestive biscuit, sometimes described as a sweet-meal biscuit, is a semi-sweet biscuit that originated in Scotland. The digestive was first developed in 1839 by two Scottish doctors to aid digestion.</p><p>Recommended Dunk Time: 5</p><p>Wikipedia: <a href="https://en.wikipedia.org/wiki/Digestive_biscuit">Digestive</a></p></div><div class="card-background rounded text-center m-1 fw-bold"><p class="my-auto">You have dunked that biscuit!</p></div><div class="container-fluid mt-2 d-flex justify-content-around"><form action="hiddenDunk.php" method="POST"><input type="hidden" name="id" value="1" ><input type="hidden" name="redirectionID" value="1" ><button type="submit" disabled  class="btn btn-success"><img class="details-icon" alt="Dunk cookie" src="design/Dunk_Icon.png" /></button></form><form action="hiddenFlunk.php" method="POST"><input type="hidden" name="id" value="1" ><input type="hidden" name="redirectionID" value="1" ><button type="submit" class="btn btn-danger"><img class="details-icon" alt="Flunk cookie" src="design/Flunk_Icon.png" /></button></form></div></div>';
        $actual = BiscuitViewHelper::displayBiscuitDetails($input, $input2);
        $this->assertEquals($exp, $actual);
    }

    public function testSuccessDisplayBiscuitDetailsFlunk() 
    {
        $biscuitMock = $this->createMock(Biscuit::class);
        $biscuitMock->method('getName')->willReturn('Digestive');
        $biscuitMock->method('getImg')->willReturn('https://s3-us-west-1.amazonaws.com/contentlab.studiod/getty/d05662cfb32042c9894dddf8ed73ce22.jpg');
        $biscuitMock->method('getId')->willReturn(1);
        $biscuitMock->method('getDescription')->willReturn('A digestive biscuit, sometimes described as a sweet-meal biscuit, is a semi-sweet biscuit that originated in Scotland. The digestive was first developed in 1839 by two Scottish doctors to aid digestion.');
        $biscuitMock->method('getRDT')->willReturn(5);
        $biscuitMock->method('getWikipedia')->willReturn('https://en.wikipedia.org/wiki/Digestive_biscuit');
        $input = $biscuitMock;
        $input2 =['1' => false];
        $exp = '<div class="card d-flex flex-direction-column align-items-center p-3 m-4 col-10"><div class="card-title card-background rounded"><h2 class="text-center p-2">Digestive</h2></div><div class="card-img d-flex justify-content-center mb-3"><img src="https://s3-us-west-1.amazonaws.com/contentlab.studiod/getty/d05662cfb32042c9894dddf8ed73ce22.jpg" class="rounded mw-100" alt="Digestive" /></div><div class="card-background rounded p-3"><p>A digestive biscuit, sometimes described as a sweet-meal biscuit, is a semi-sweet biscuit that originated in Scotland. The digestive was first developed in 1839 by two Scottish doctors to aid digestion.</p><p>Recommended Dunk Time: 5</p><p>Wikipedia: <a href="https://en.wikipedia.org/wiki/Digestive_biscuit">Digestive</a></p></div><div class="card-background rounded text-center m-1 fw-bold"><p class="my-auto">You have flunked that biscuit!</p></div><div class="container-fluid mt-2 d-flex justify-content-around"><form action="hiddenDunk.php" method="POST"><input type="hidden" name="id" value="1" ><input type="hidden" name="redirectionID" value="1" ><button type="submit" class="btn btn-success"><img class="details-icon" alt="Dunk cookie" src="design/Dunk_Icon.png" /></button></form><form action="hiddenFlunk.php" method="POST"><input type="hidden" name="id" value="1" ><input type="hidden" name="redirectionID" value="1" ><button type="submit" disabled  class="btn btn-danger"><img class="details-icon" alt="Flunk cookie" src="design/Flunk_Icon.png" /></button></form></div></div>';
        $actual = BiscuitViewHelper::displayBiscuitDetails($input, $input2);
        $this->assertEquals($exp, $actual);
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
        $input2 =['dunkedFlunked' => ['1' => true]];
        $expected = 'no biscuit selected';
        $actual = BiscuitViewHelper::displayBiscuitDetails($input, $input2);
        $this->assertEquals($expected, $actual);
    }

    public function testMalformedDisplayBiscuitDetails()
    {
        $input = 'hello';
        $input2 =['dunkedFlunked' => ['1' => true]];
        $this->expectException(TypeError::class);
        $case = BiscuitViewHelper::displayBiscuitDetails($input, $input2);
    }
}