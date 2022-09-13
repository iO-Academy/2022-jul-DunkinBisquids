<?php

namespace BisquidsTin\ViewHelpers;

use BisquidsTin\Classes\Biscuits;

class DetailsViewHelper
{
    public static function displayBiscuitDetails(array $biscuit):string {

        $result = '';

        if ($biscuit[0] instanceof Biscuits)
        {
            $result .= '<div class="card d-flex flex-direction-column align-items-center p-3 m-4 col-10">';
            $result .= '<div class="card-title card-background rounded">';
            $result .= '<h2 class="text-center p-2">' . $biscuit[0]->getName() . '</h2>';
            $result .= '</div><div class="card-img d-flex justify-content-center mb-3">';
            $result .= '<img src="' . $biscuit[0]->getImg() . '" class="rounded mw-100" alt="' . $biscuit[0]->getName() . '" />';
            $result .= '</div><div class="card-background rounded p-3"><p>' . $biscuit[0]->getDescription() . '</p>';
            $result .= '<p>RDT: ' . $biscuit[0]->getRDT() . '</p>';
            $result .= '<p>Wiki: <a href="' . $biscuit[0]->getWikipedia() . '">' . $biscuit[0]->getName() . '</a></p></div>';
            $result .= '<form action="biscuitDetails.php" method="POST">';
            $result .= '<input type="hidden" value="' . $biscuit[0]->getId() . '" />';
            $result .= '</form></div>';
        }
        return $result;
    }

    public static function testdisplayBiscuitDetails() {

        {
            $result = '<div class="card d-flex flex-direction-column align-items-center p-3 m-4 col-10">';
            $result .= '<div class="card-title card-background rounded">';
            $result .= '<h2 class="text-center p-2">Digestive</h2>';
            $result .= '</div><div class="card-img d-flex justify-content-center mb-3">';
            $result .= '<img src="https://s3-us-west-1.amazonaws.com/contentlab.studiod/getty/d05662cfb32042c9894dddf8ed73ce22.jpg" class="rounded mw-100" alt="digestive" />';
            $result .= '</div><div class="card-background rounded p-3"><p>A digestive biscuit, sometimes described as a sweet-meal biscuit, is a semi-sweet biscuit that originated in Scotland. The digestive was first developed in 1839 by two Scottish doctors to aid digestion.</p>';
            $result .= '<p>RDT: 7</p>';
            $result .= '<p>Wikipedia: <a href="https://en.wikipedia.org/wiki/Digestive_biscuit">Digestive</a></p></div>';
            $result .= '<form action="biscuitDetails.php" method="POST">';
            $result .= '<input type="hidden" value="1" />';
            $result .= '</form></div>';
        }
        return $result;
    }
}