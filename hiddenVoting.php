<?php

session_start();

use BisquidsTin\Hydrators\BiscuitHydrator;
use BisquidsTin\Utilities\DB;

require_once './vendor/autoload.php';

$db = DB::getDB();
$biscuits = BiscuitHydrator::getBiscuits($db);


if(isset ($_POST['dunkBiscuit'])) {
    $name = $_POST['dunkBiscuit'];
    $id = $_POST['dunk'];
    $_SESSION[$name] = 1;
    BiscuitHydrator::incrementDunk($db, $id);
    // header('Location: index.php');
} elseif (isset ($_POST['flunk'])) {
    $name = $_POST['flunkBiscuit'];
    $id = $_POST['flunk'];
    $_SESSION[$name] = 0;
    BiscuitHydrator::incrementFlunk($db, $id);
    // header('Location: index.php');
}

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
// $result = BiscuitsHydrator::decrementDunk($db, $id);
// $result2 = BiscuitsHydrator::decrementFlunk($db, $id);
