<?php

use BisquidsTin\ViewHelpers\BiscuitsViewHelper;

require_once './vendor/autoload.php';

?>

<!DOCTYPE html>
<html lang="en-gb">
<head>
	<title>Bisquids</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="container">
    <?php echo BiscuitsViewHelper::biscTest() ?>
</body>
</html>