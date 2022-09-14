<?php

session_start();

use BisquidsTin\Hydrators\BiscuitHydrator;
use BisquidsTin\Utilities\DB;

require_once './vendor/autoload.php';

if(isset ($_POST['id'])) {
    $db = DB::getDB();
    $id = $_POST['id'];
    $_SESSION['dunkFlunk'][$id] = false;
    BiscuitHydrator::incrementFlunk($db, $id);
    header('Location: index.php#' . $id);
}