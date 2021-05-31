<?php 
require_once __DIR__ . "/movie.php"; 
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
    <main>
        <h1>INSTANZA 1</h1>
        <h2><?php echo "titolo: " . $ilGladiatore->title; ?></h2>
        <h3><?php echo "regista: " . $ilGladiatore->regista; ?></h3>
        <h3><?php echo "genere: " . $ilGladiatore->genere; ?></h3>
        <h3><?php echo "protagonista: " . $ilGladiatore->protagonista; ?></h3>
        <p><?php echo "trama: " . $ilGladiatore->estrazione(); ?></p>
    </main>
    <main>
        <h1>INSTANZA 2</h1>
        <h2><?php echo "titolo: " . $ilCavaliereOscuro->title; ?></h2>
        <h3><?php echo "regista: " . $ilCavaliereOscuro->regista; ?></h3>
        <h3><?php echo "genere: " . $ilCavaliereOscuro->genere; ?></h3>
        <h3><?php echo "protagonista: " . $ilCavaliereOscuro->protagonista; ?></h3>
        <p><?php echo "trama: " . $ilCavaliereOscuro->estrazione(); ?></p>
    </main>
</body>
</html>