<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="sfondo">
    <?php
    session_start();
    $ng = $_SESSION['ArrayGioco'];
    $pg = $_SESSION['ArrayPunteggio'];
    $c = null;
    $in = 0;
    for ($i = 0; $i < count($_SESSION['ArrayGioco']); $i++) {
        if (max($pg) == $pg[$i]) {
            $c = $pg[$i];
            $in = $i;
        }
    }

    echo "punteggio massimo: " . $c . " nel videogioco: " . $ng[$in] . "<br>";
    echo "lista: <br>";
    for ($i = 0; $i < count($ng); $i++) {

            echo "nome: $ng[$i] ";
            echo "punteggio: $pg[$i].<br>";
    }
    session_destroy();
    ?>
    <form action="index.php" method="post">
        <input type="submit" value="okokok">
    </form>
</body>

</html>