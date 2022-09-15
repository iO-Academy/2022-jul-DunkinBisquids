<?php
require_once './vendor/autoload.php';

session_start();
if (!isset($_SESSION['dunkFlunk'])) {
    $_SESSION['dunkFlunk'] = [];
}

$dunkedFlunkedData = $_SESSION['dunkFlunk'];

use BisquidsTin\Utilities\DB;
use BisquidsTin\Utilities\FaveBiscuitDataProcessor;
use BisquidsTin\Hydrators\BiscuitHydrator;
use BisquidsTin\ViewHelpers\BiscuitViewHelper;

$db = DB::getDB();
$faveBiscuitIds = FaveBiscuitDataProcessor::getFaveBiscuitData($dunkedFlunkedData);
$faveBiscuitList = BiscuitHydrator::getFaveBiscuits($db, $faveBiscuitIds);
$faveBiscuitDisplay = BiscuitViewHelper::displayAllBiscuits($faveBiscuitList, $dunkedFlunkedData);
?>
<html lang="en-gb">
<head>
    <title>Dunkin' Bisquids</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav class="container-fluid border-bottom bg-white">
        <div class="row">
            <h1 class="text-center title py-1 py-lg-4">Dunkin' Bisquids</h1>
        </div>
    </nav>
    <main class="d-flex justify-content-center">
        <img class="logoImg" src="./design/Dunkin_Donut_Logo.png" alt="Dunkin_Bisquids_Logo">
        <div class="d-flex flex-column container">
            <section class="d-flex justify-content-center container">
                <div class="m-4 d-flex justify-content-center row">
                    <a href="index.php" class="btn btn-primary">Back to Bisquids</a>
                </div>
            </section>
            <section class="container">
                <div class="row d-flex justify-content-center py-2">
                    <?= $faveBiscuitList ? $faveBiscuitDisplay  : '<h2 class="fw-bold text-center text-danger">You have nothing dunked</h2>' ?>   
                </div>
            </section>
        </div>
    </main>
</body>

</html>