<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
            <?php
            session_start();
                session_destroy();
            ?>
            <form action="index.php" method="post">
                <input type="submit" value="okokok">
            </form>
</body>
</html>