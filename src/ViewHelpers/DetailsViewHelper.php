<?php

namespace BisquidsTin\ViewHelpers;

class DetailsViewHelper
{
    public static function displayBiscuitDetails($biscuit)
    {
        $result = '<div class="card d-flex flex-direction-column align-items-center p-3 m-4 col-10 col-lg-3">';
        $result .= '<div class="card-title rounded">';
        $result .= '<h2 class="text-center p-2">' . $biscuit[0]->getName() . '</h2>';
        $result .= '</div><div class="card-img d-flex justify-content-center mb-3">';
        $result .= '<img src="' . $biscuit[0]->getImg() . '" class="rounded mw-100" alt="' . $biscuit[0]->getName() . '" />';
        $result .= '</div><div><p>' . $biscuit[0]->getDescription() . '</p>';
        $result .= '<p>RDT: ' . $biscuit[0]->getRDT() . '</p>';
        $result .= '<p>Wiki: <a href"' . $biscuit[0]->getWikipedia() . '">' . $biscuit[0]->getName() . '</p>';
        $result .= '<form action="biscuitDetails.php" method="POST">';
        $result .= '<input type="hidden" value="' . $biscuit[0]->getId() . '" />';
        $result .= '</form></div>';
    }
}