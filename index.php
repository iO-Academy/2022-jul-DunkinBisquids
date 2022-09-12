<?php

require_once './vendor/autoload.php';

use BisquidsTin\Utilities\GetDB;
use BisquidsTin\Hydrators\BiscuitsHydrator;

$db= GetDB::getDB();
$biscuits= BiscuitsHydrator::getBiscuits($db);

echo '<pre>';
var_dump($biscuits);
echo '</pre>';