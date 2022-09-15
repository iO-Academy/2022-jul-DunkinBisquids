<?php

session_start();

use BisquidsTin\Hydrators\BiscuitHydrator;
use BisquidsTin\Utilities\DB;

require_once './vendor/autoload.php';

if(isset ($_POST['id'])) {
    $db = DB::getDB();
    $id = $_POST['id'];
    if(isset($_SESSION['dunkFlunk'][$id]) && $_SESSION['dunkFlunk'][$id]) {
        $_SESSION['dunkFlunk'][$id] = false;
        BiscuitHydrator::decrementDunk($db, $id);
        BiscuitHydrator::incrementFlunk($db, $id);
        if(isset($_POST['redirectionID'])) {
            header('Location: biscuitdetails.php?id=' . $id);
        } else {
        header('Location: index.php#' . $id);
        }
    } else {
        $_SESSION['dunkFlunk'][$id] = false;
        BiscuitHydrator::incrementFlunk($db, $id);
        header('Location: index.php#' . $id);
    }
} else {
    header('Location: index.php');
}