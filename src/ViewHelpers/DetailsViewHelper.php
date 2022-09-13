<?php

namespace BisquidsTin\ViewHelpers;

use BisquidsTin\Classes\Biscuits;

class DetailsViewHelper
{
    /**
     * Function to display an individual biscuit in greater detail
     *
     * @param array $biscuit
     * @return string
     */
    public static function displayBiscuitDetails(Biscuits $biscuit):string {

        $result = '';

        if ($biscuit instanceof Biscuits)
        {
            $result .= '<div class="card d-flex flex-direction-column align-items-center p-3 m-4 col-10">';
            $result .= '<div class="card-title card-background rounded">';
            $result .= '<h2 class="text-center p-2">' . $biscuit->getName() . '</h2>';
            $result .= '</div><div class="card-img d-flex justify-content-center mb-3">';
            $result .= '<img src="' . $biscuit->getImg() . '" class="rounded mw-100" alt="' . $biscuit->getName() . '" />';
            $result .= '</div><div class="card-background rounded p-3"><p>' . $biscuit->getDescription() . '</p>';
            $result .= '<p>RDT: ' . $biscuit->getRDT() . '</p>';
            $result .= '<p>Wikipedia: <a href="' . $biscuit->getWikipedia() . '">' . $biscuit->getName() . '</a></p></div>';
            $result .= '<form action="biscuitDetails.php" method="POST">';
            $result .= '<input type="hidden" value="' . $biscuit->getId() . '" />';
            $result .= '</form></div>';
        }
        return $result;
    }
}