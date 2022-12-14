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
    public static function displayAllBiscuits(array $biscuits, array $dunkFlunkData): string
    {
        $result = "";

        foreach ($biscuits as $biscuit)
            if ($biscuit instanceof Biscuit) {
                $dunkFlunkState = null;

                if (array_key_exists($biscuit->getId(), $dunkFlunkData)) {
                    $dunkFlunkState = $dunkFlunkData[$biscuit->getId()];
                }
                $result .= '<div id="' . $biscuit->getId() . '" class="card d-flex flex-direction-column align-items-center p-3 m-4 col-10 col-lg-3">';
                $result .= '<div class="card-title card-background rounded">';
                $result .= '<h2 class="text-center p-2">' . $biscuit->getName() . '</h2>';
                $result .= '</div><div class="card-img d-flex justify-content-center mb-3">';
                $result .= '<img src="' . $biscuit->getImg() . '" class="rounded mw-100" alt="' . $biscuit->getName() . '" />';
                $result .= '</div><form action="biscuitdetails.php" method="GET">';
                $result .= '<input type="hidden" name="id" value="' . $biscuit->getId() . '" />';
                $result .= '<button type="submit" class="btn btn-light">More Info</button>';
                $result .= '</form>';
                if (isset($dunkFlunkState)) {
                    $result .= '<div class="card-background rounded text-center m-1 fw-bold"><p class="my-auto">';
                    $result .= ($dunkFlunkState ? 'You have dunked this biscuit!' : 'You have flunked this biscuit!');
                    $result .= '</p></div>';
                }
                $result .= '<div class="d-flex container-fluid justify-content-around"><form action="hiddenDunk.php" method="POST">';
                $result .= '<input type="hidden" name="id" value="' . $biscuit->getId() . '" >';
                $result .= '<button type="submit"';
                if (isset($dunkFlunkState)) {
                    $result .= ($dunkFlunkState ? ' disabled ' : '');
                }
                $result .= 'class="btn btn-success"><img class="list-icon" alt="Dunk cookie" src="design/Dunk_Icon.png" /></button>';
                $result .= '</form>';
                $result .= '<form action="hiddenFlunk.php" method="POST">';
                $result .= '<input type="hidden" name="id" value="' . $biscuit->getId() . '" >';
                $result .= '<button type="submit"';
                if (isset($dunkFlunkState)) {
                    $result .= (!$dunkFlunkState ? ' disabled ' : '');
                }
                $result .= 'class="btn btn-danger"><img class="list-icon" src="design/Flunk_Icon.png" alt="Flunk Cookie" /></button>';
                $result .= '</form></div>';
                $result .= '<div class="d-flex container-fluid justify-content-around">';
                $result .= '<p class="my-0 text-success px-2 rounded fs-4 text bg-light">' . $biscuit->getDunk() . '</p>';
                $result .= '<p class="my-0 px-2 rounded bg-light text-danger fs-4 text">' . $biscuit->getFlunk() . '</p></div>';
                $result .= '</div>';
            }
        return $result;
    }

    /**
     * Function to display an individual biscuit in greater detail
     *
     * @param Biscuit $biscuit
     * @return string
     */
    public static function displayBiscuitDetails(Biscuit $biscuit, array $dunkFlunkData): string
    {
        if ($biscuit->getName() !== '') {
            $dunkFlunkState = null;
            if (array_key_exists($biscuit->getId(), $dunkFlunkData)) {
                $dunkFlunkState = $dunkFlunkData[$biscuit->getId()];
            }
            $result = '';
            $result .= '<div class="card d-flex flex-direction-column align-items-center p-3 m-4 col-10">';
            $result .= '<div class="card-title card-background rounded">';
            $result .= '<h2 class="text-center p-2">' . $biscuit->getName() . '</h2>';
            $result .= '</div><div class="card-img d-flex justify-content-center mb-3">';
            $result .= '<img src="' . $biscuit->getImg() . '" class="rounded mw-100" alt="' . $biscuit->getName() . '" />';
            $result .= '</div><div class="card-background rounded p-3"><p>' . $biscuit->getDescription() . '</p>';
            $result .= '<p>Recommended Dunk Time: ' . $biscuit->getRDT() . '</p>';
            $result .= '<p>Wikipedia: <a href="' . $biscuit->getWikipedia() . '" target="_blank">' . $biscuit->getName() . '</a></p></div>';
            if (isset($dunkFlunkState)) {
                $result .= '<div class="card-background rounded text-center m-1 fw-bold"><p class="my-auto">';
                $result .= ($dunkFlunkState ? 'You have dunked this biscuit!' : 'You have flunked this biscuit!');
                $result .= '</p></div>';
            }
            $result .= '<div class="container-fluid mt-2 d-flex justify-content-around"><form action="hiddenDunk.php" method="POST">';
            $result .= '<input type="hidden" name="id" value="' . $biscuit->getId() . '" >';
            $result .= '<input type="hidden" name="redirectionID" value="' . $biscuit->getId() . '" >';
            $result .= '<button type="submit"';
            if (isset($dunkFlunkState)) {
                $result .= ($dunkFlunkState ? ' disabled ' : '');
            }
            $result .= ' class="btn btn-success"><img class="details-icon" alt="Dunk cookie" src="design/Dunk_Icon.png" /></button>';
            $result .= '</form>';

            $result .= '<form action="hiddenFlunk.php" method="POST">';
            $result .= '<input type="hidden" name="id" value="' . $biscuit->getId() . '" >';
            $result .= '<input type="hidden" name="redirectionID" value="' . $biscuit->getId() . '" >';
            $result .= '<button type="submit"';
            if (isset($dunkFlunkState)) {
                $result .= (!$dunkFlunkState ? ' disabled ' : '');
            }
            $result .= ' class="btn btn-danger"><img class="details-icon" alt="Flunk cookie" src="design/Flunk_Icon.png" /></button>';
            $result .= '</form></div>';
            $result .= '<div class="d-flex container-fluid justify-content-around">';
            $result .= '<p class="my-0 text-success px-2 rounded fs-4 text bg-light">' . $biscuit->getDunk() . '</p>';
            $result .= '<p class="my-0 px-2 rounded bg-light text-danger fs-4 text">' . $biscuit->getFlunk() . '</p></div>';
            $result .= '</div>';
            return $result;
        } else {
            return 'no biscuit selected';
        }
    }
}
