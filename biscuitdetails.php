<?php
require_once './vendor/autoload.php';

session_start();
if (!isset($_SESSION['dunkFlunk'])) {
    $_SESSION['dunkFlunk'] = [];
}

$dunkedFlunkedData = $_SESSION['dunkFlunk'];
use BisquidsTin\CustomExceptions\InvalidIdException;
use BisquidsTin\Hydrators\BiscuitHydrator;
use BisquidsTin\Utilities\DB;
use BisquidsTin\ViewHelpers\BiscuitViewHelper;

if (isset($_GET['id']) && $_GET['id'] !== '') {
    try {
        $id = $_GET['id'];
        $db = DB::getDB();
        $biscuit = BiscuitHydrator::getBiscuitById($db, $id);   
    } catch (InvalidIdException $e) {
        header('Location: index.php');
    }
    $biscuitDetailsDisplay = BiscuitViewHelper::displayBiscuitDetails($biscuit, $dunkedFlunkedData);
} else {
    header('Location: index.php');
}

?>
<html lang="en-gb">

<head>
    <title>Dunkin' Bisquids Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <nav class="container-fluid border-bottom bg-white sticky-top">
        <div class="row">
            <h1 class="text-center title py-lg-4 py-2">Dunkin' Bisquids</h1>
        </div>
    </nav>
    <div class="m-4 d-flex justify-content-end">
        <a href="index.php" class="btn btn-primary">Back to Bisquids</a>
    </div>
    <main class="d-flex justify-content-center">
        <img class="logoImg" src="./design/Dunkin_Donut_Logo.png" alt="Dunkin_Bisquids_Logo">
        <section class="container d-flex justify-content-center">
            <?= $biscuitDetailsDisplay ?>
        </section>
    </main>
</body>

</html>