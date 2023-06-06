<?php
	$testo = $_GET['testo'];
    $lung_testo = strlen($testo);
    $censura = $_GET['parola'];
    $testo_censurato = str_replace($censura, '***', $testo);
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
    <p>Il tuo testo censurato: <?= $testo_censurato ?></p>
</body>
</html>