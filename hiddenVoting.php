<?php

session_start();

use BisquidsTin\Hydrators\BiscuitsHydrator;
use BisquidsTin\Utilities\DB;

require_once './vendor/autoload.php';

$db = DB::getDB();
$biscuits = BiscuitsHydrator::getBiscuits($db);