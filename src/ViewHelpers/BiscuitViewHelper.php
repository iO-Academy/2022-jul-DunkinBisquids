<?php

namespace BisquidsTin\ViewHelpers;

use BisquidsTin\Classes\Biscuit;

class BiscuitViewHelper 
{
    /**
     * Function to display all the individual biscuit data from the array of biscuits.
     *
     * @param array $biscuits
     * @return string
     */
    public static function displayAllBiscuits(array $biscuits, array $dunkedFlunked): string
    {
        $result = "";

        foreach($biscuits as $biscuit)
        if ($biscuit instanceof Biscuit) {
            $dunkFlunkState = null;
            if(array_key_exists($biscuit->getId(), $dunkedFlunked)) {
                $dunkFlunkState = $dunkedFlunked[$biscuit->getId()];
                echo 'id of ' . $biscuit->getId() . ' exists in the session data and its value is: ' . $dunkFlunkState . ' <br>';
            }

            $result .= '<div class="card d-flex flex-direction-column align-items-center p-3 m-4 col-10 col-lg-3">';
            $result .= '<div class="card-title card-background rounded">';
            $result .= '<h2 class="text-center p-2">' . $biscuit->getName() . '</h2>';
            $result .= '</div><div class="card-img d-flex justify-content-center mb-3">';
            $result .= '<img src="' . $biscuit->getImg() . '" class="rounded mw-100" alt="' . $biscuit->getName() . '" />';
            $result .= '</div><form action="biscuitdetails.php" method="GET">';
            $result .= '<input type="hidden" name="id" value="' . $biscuit->getId() . '" />';
            $result .= '<button type="submit" class="btn btn-light">More Info</button>';
            $result .= '</form>';

            $result .= '<div class="d-flex container-fluid justify-content-around"><form action="hiddenVoting.php" method="POST">';
            $result .= '<input type="hidden" name="dunk" value="' . $biscuit->getId() . '" >';
            $result .= '<input type="hidden" name="dunkBiscuit" value="' . $biscuit->getName() . '" >';
            $result .= '<button type="submit"'; 
            if(isset($dunkFlunkState)) {
                $result .= ($dunkFlunkState ? ' disabled ' : '');
            }
            $result .= 'class="btn btn-success">Dunk</button>';
            $result .= '</form>';


            $result .= '<form action="hiddenVoting.php" method="POST">';
            $result .= '<input type="hidden" name="flunk" value="' . $biscuit->getId() . '" >';
            $result .= '<input type="hidden" name="flunkBiscuit" value="' . $biscuit->getName() . '">';
            $result .= '<button type="submit"'; 
            if(isset($dunkFlunkState)) {
                $result .= (!$dunkFlunkState ? ' disabled ' : '');
            }
            $result .= 'class="btn btn-danger">Flunk</button>';
            $result .= '</form></div></div>';
        }
        return $result;
    }

    /**
     * Function to display an individual biscuit in greater detail
     *
     * @param Biscuit $biscuit
     * @return string
     */
    public static function displayBiscuitDetails(Biscuit $biscuit):string {
        
        if ($biscuit->getName() !== '') {
            $result = '';
            $result .= '<div class="card d-flex flex-direction-column align-items-center p-3 m-4 col-10">';
            $result .= '<div class="card-title card-background rounded">';
            $result .= '<h2 class="text-center p-2">' . $biscuit->getName() . '</h2>';
            $result .= '</div><div class="card-img d-flex justify-content-center mb-3">';
            $result .= '<img src="' . $biscuit->getImg() . '" class="rounded mw-100" alt="' . $biscuit->getName() . '" />';
            $result .= '</div><div class="card-background rounded p-3"><p>' . $biscuit->getDescription() . '</p>';
            $result .= '<p>RDT: ' . $biscuit->getRDT() . '</p>';
            $result .= '<p>Wikipedia: <a href="' . $biscuit->getWikipedia() . '">' . $biscuit->getName() . '</a></p></div>';
            
            return $result;
        } else {
            return 'no biscuit selected';
        }
    }
}