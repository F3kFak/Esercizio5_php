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
        $nomegioco = $_POST['nomegioco'];
        $punteggiogioco = $_POST['punteggiogioco'];
        $_SESSION['o'] = false;

        $_SESSION['ArrayGioco'] = $_SESSION['ArrayGioco'] ?? array(); // controlla se è nullo fai questo
        $_SESSION['ArrayPunteggio'] = $_SESSION['ArrayPunteggio'] ?? array();

        for ($i=0; $i <= count($_SESSION['ArrayGioco']); $i++) { 
            if ($nomegioco == $_SESSION['ArrayGioco'][$i]) {
                if ($punteggiogioco > $_SESSION['ArrayPunteggio'][$i]) {
                    $_SESSION['ArrayPunteggio'][$i] = $punteggiogioco;
                    $_SESSION['o'] = true;
                } 
            } 
        }

        if (!$_SESSION['o']) {
            array_push($_SESSION['ArrayGioco'], $nomegioco);
            array_push($_SESSION['ArrayPunteggio'], $punteggiogioco);
        }
        
        $ng = $_SESSION['ArrayGioco'];
        $pg = $_SESSION['ArrayPunteggio'];

        for($i = 0; $i < count($ng); $i++)
        {
            echo"nome: $ng[$i] ";
            echo"punteggio: $pg[$i].<br>";
        }
    ?>

        <form action="index.php" method="post">
            <input type="submit" value="Ritorno" name="c">
        </form>

        <form action="pag3.php" method="post">
            
            <input type="submit" value="ok">
        </form>

</body>

</html>