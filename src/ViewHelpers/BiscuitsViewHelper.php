<?php

namespace BisquidsTin\ViewHelpers;

use BisquidsTin\Classes\Biscuits;

class BiscuitsViewHelper 
{
    /**
     * Function to display all the individual biscuit data from the array of biscuits.
     *
     * @param array $biscuits
     * @return string
     */
    public static function displayAllBiscuits(array $biscuits): string
    {
        $result = "";

        foreach($biscuits as $biscuit)
        if ($biscuit instanceof Biscuits) {
            $result .= '<div class="card d-flex flex-direction-column align-items-center p-3 m-4 col-10 col-lg-3">';
            $result .= '<div class="card-title rounded">';
            $result .= '<h2 class="text-center py-2">' . $biscuit->getName() . '</h2>';
            $result .= '</div><div class="card-img d-flex justify-content-center">';
            $result .= '<img src="' . $biscuit->getImg() . '" class="rounded mw-100" alt="' . $biscuit->getName() . '" />';
            $result .= '</div></div>';
        }
        return $result;
    }
}