<?php
require_once './vendor/autoload.php';
use BisquidsTin\ViewHelpers\BiscuitsViewHelper;
use BisquidsTin\Utilities\GetDB;
use BisquidsTin\Hydrators\BiscuitsHydrator;

$db= GetDB::getDB();
$biscuits= BiscuitsHydrator::getBiscuits($db);

?>
<html>
    <head>
        <title>Dunkin' Bisquids</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <nav class="container-fluid bg-white ">
            <div class="row">
                <h1 class="text-center title p-lg-5 p-2">Dunkin' Bisquids</h1>
            </div>
        </nav>
        <main>
            <img class="logoImg" src="./Dunkin_Donut_Logo.png" alt="Dunkin_Bisquids_Logo">
            <section class="container">
                <div class="row d-flex justify-content-center">
                <?php echo BiscuitsViewHelper::displayAllBiscuits($biscuits) ?>
                </div>
            </section>
        </main>
    </body>
</html>