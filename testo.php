<?php
	$testo = $_GET['testo'];
    $lung_testo = strlen($testo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?= $testo; ?>
    </p>
    <p>Il tuo testo è lungo: <?= $lung_testo; ?></p>
</body>
</html>