<?php

namespace BisquidsTin\ViewHelpers;

class BiscuitsViewHelper 
{
    public static function displayAllBiscuits(array $biscuits): string
    {
        $result = "";

        foreach($biscuits as $biscuit)
        {
            $result .= 
            '<div class="card d-flex flex-direction-column align-items-center p-3 m-4 col-10 col-lg-3">
                <div class="card-title rounded">
                    <h2 class="text-center py-2">' . $biscuit->getName() . '</h2>
                </div>
                <div class="card-img d-flex justify-content-center">
                    <img src="' . $biscuit->getImg() . '" class="rounded mw-100" alt="' . $biscuit->getName() . '" />
                </div>
            </div>';
        }
        return $result;
    }
}