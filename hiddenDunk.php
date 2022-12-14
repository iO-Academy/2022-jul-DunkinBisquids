<?php

session_start();

use BisquidsTin\Hydrators\BiscuitHydrator;
use BisquidsTin\Utilities\DB;

require_once './vendor/autoload.php';

if (isset($_POST['id'])) {
    $db = DB::getDB();
    $id = $_POST['id'];
    if (isset($_SESSION['dunkFlunk'][$id]) && !$_SESSION['dunkFlunk'][$id]) {
        $_SESSION['dunkFlunk'][$id] = true;
        BiscuitHydrator::decrementFlunk($db, $id);
        BiscuitHydrator::incrementDunk($db, $id);
        if (isset($_POST['redirectionID'])) {
            header('Location: biscuitdetails.php?id=' . $id);
        } else {
            header('Location: index.php#' . $id);
        }
    } else {
        $_SESSION['dunkFlunk'][$id] = true;
        BiscuitHydrator::incrementDunk($db, $id);
        if (isset($_POST['redirectionID'])) {
            header('Location: biscuitdetails.php?id=' . $id);
        } else {
            header('Location: index.php#' . $id);
        }
    }
} else {
    header('Location: index.php');
}
