<?php
require_once './vendor/autoload.php';
use BisquidsTin\ViewHelpers\BiscuitsViewHelper;
use BisquidsTin\Utilities\DB;
use BisquidsTin\Hydrators\BiscuitsHydrator;

$db = DB::getDB();
$biscuits = BiscuitsHydrator::getBiscuits($db);
$biscuitDisplay = BiscuitsViewHelper::displayAllBiscuits($biscuits);

?>
<html lang="en-gb">
    <head>
        <title>Dunkin' Bisquids</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <nav class="container-fluid border-bottom bg-white sticky-top" >
            <div class="row">
                <h1 class="text-center title py-lg-4 py-2">Dunkin' Bisquids</h1>
            </div>
        </nav>
        <main class="d-flex justify-content-center">
            <img class="logoImg" src="./design/Dunkin_Donut_Logo.png" 
alt="Dunkin_Bisquids_Logo">
            <section class="container">
                <div class="row d-flex justify-content-center py-2">
                    <?= $biscuitDisplay ?>
                </div>
            </section>
        </main>
    </body>
</html>
