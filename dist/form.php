<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulierverwerking</title>
</head>
<body>
    <h1>Formuluierverwerking</h1>
    <p>Bedankt voor uw bericht! Hier zijn nog eens al uw gegevens op een rijtje:</p>
    <hr>
    <?php
    if (isset($_POST["naam"]) && $_POST["naam"] != ""){
        echo "<p> Uw naam: " . $_POST["naam"] . "</p>\n";
    }
    else{
        echo "<p> Naam werd niet ingevuld. </p>\n";
    }

    if (isset($_POST["email"]) && $_POST["email"] != ""){
        echo "<p> Uw e-mailadres: " . $_POST["email"] . "</p>\n";
    }
    else{
        echo "<p> E-mailadres werd niet ingevuld. </p>\n";
    }

    if (isset($_POST["bericht"]) && $_POST["bericht"] != ""){
        echo "<p> Uw bericht: " . $_POST["naam"] . "</p>\n";
    }
    else{
        echo "<p> U heeft geen bericht meegedeeld. </p>\n";
    }

    if (isset($_POST["akkoord"]) && $_POST["akkoord"] != ""){
        echo "<p> Uw ging akkoord met de voorwaarden. </p>\n";
    }
    else{
        echo "<p> U ging niet akkoord met de voorwaarden. </p>\n";
    }

    ?>

</body>
</html>