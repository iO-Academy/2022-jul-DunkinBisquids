<?php

session_start();

use BisquidsTin\Utilities\DB;

require_once './vendor/autoload.php';

$db = DB::getDB();
