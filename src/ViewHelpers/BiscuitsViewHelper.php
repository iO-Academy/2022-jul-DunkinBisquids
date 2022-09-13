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
            $result .= '<h2 class="text-center p-2">' . $biscuit->getName() . '</h2>';
            $result .= '</div><div class="card-img d-flex justify-content-center mb-3">';
            $result .= '<img src="' . $biscuit->getImg() . '" class="rounded mw-100" alt="' . $biscuit->getName() . '" />';
            $result .= '</div><form action="biscuitDetails.php" method="POST">';
            $result .= '<input type="hidden" value="' . $biscuit->getId() . '" >';
            $result .= '<button type="submit" class="btn btn-light">More Info</button>';
            $result .= '</form>';
            $result .= '<div class="d-flex container-fluid justify-content-around"><form action="hiddenVoting.php" method="POST">';
            $result .= '<input type="hidden" name="dunk" value="' . $biscuit->getId() . '" >';
            $result .= '<button type="submit" class="btn btn-success">Dunk</button>';
            $result .= '</form>';
            $result .= '<form action="hiddenVoting.php" method="POST">';
            $result .= '<input type="hidden" name="flunk" value="' . $biscuit->getId() . '" >';
            $result .= '<button type="submit" class="btn btn-danger">Flunk</button>';
            $result .= '</form></div></div>';
        }
        return $result;
    }
}