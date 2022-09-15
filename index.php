<?php
require_once './vendor/autoload.php';

session_start();
if (!isset($_SESSION['dunkFlunk'])) {
    $_SESSION['dunkFlunk'] = [];
}

$dunkedFlunkedData = $_SESSION['dunkFlunk'];


use BisquidsTin\ViewHelpers\BiscuitViewHelper;
use BisquidsTin\Utilities\DB;
use BisquidsTin\Hydrators\BiscuitHydrator;
use BisquidsTin\Utilities\BiscuitDataProcessor;

$db = DB::getDB();
$biscuits = BiscuitHydrator::getBiscuits($db);
$biscuitDisplay = BiscuitViewHelper::displayAllBiscuits($biscuits, $dunkedFlunkedData);
$mostDunked = BiscuitDataProcessor::mostDunked($biscuits);
$mostFlunked = BiscuitDataProcessor::mostFlunked($biscuits);
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
        <div class="d-flex flex-column">
            <section class="d-flex border-bottom justify-content-around flex-column flex-md-row align-items-center bg-white">
                <div class="my-1">
                    <p class="text-success mb-1">Most Dunked: <?= $mostDunked ?></p>
                </div>
                <div class="my-1">
                    <p class="text-danger mb-1">Most Flunked: <?= $mostFlunked ?></p>
                </div>
            </section>
            <section class="container">
                <div class="row d-flex justify-content-center py-2">
                    <?= $biscuitDisplay ?>
                </div>
            </section>
        </div>
    </main>
</body>

</html>