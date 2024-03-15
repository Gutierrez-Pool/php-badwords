<?php 

$parola = $_GET['parola'];

$paragrafo = $_GET['paragrafo'];

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati dal form</title>
</head>
<body>
    <h1>Risultati dal form:</h1>

    <h2>Paragrafo:</h2>

    <p>
        "
        <?php 
            echo $paragrafo;
        ?>
        "
    </p>
    <p>
        <?php
            $risultato = strlen($paragrafo);
            echo $risultato;
        ?>
    </p>

    <hr>

    <h2>Paragrafo censurato:</h2>
    <p>
        "
        <?php 
            $badword   = "***";
            
            $nuovoparagrafo = str_replace($parola, $badword, $paragrafo);
            echo $nuovoparagrafo;
        ?>
        "
    </p>
    <p>
        <?php
            $risultato = strlen($nuovoparagrafo);
            echo $risultato;
        ?>
    </p>
</body>
</html>