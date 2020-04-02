<!doctype html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulierverwerking</title>

    <!-- CSS: Bootstrap, stylish portfolio, FA5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="css/stylish-portfolio.min.css">

    <!-- CSS: eigen stylesheet -->
    <link rel="stylesheet" href="css/webBureau.css">
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
