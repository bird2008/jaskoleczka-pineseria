<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Podsumowanie zamówienia</title>
</head>
<body>
<?php

    require 'connect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $adres = $_POST['adres'];
    $godzina = $_POST['godzina'];
    $dosodb = $_POST['metod'];
    $banknot = $_POST['banknot'];
    $platnosc = $_POST['platnosc'];
    $date = date("Y-m-d H:i:s");
    $zamowienie = $_POST['zamowienie'];

    $adder = $db->query("INSERT INTO `zamowienia` (`id`, `name`, `email`, `telefon`, `adres`, `godzina`, `dosodb`, `banknot`, `platnosc`, `zamowienie`, `date`)
            VALUES (NULL, '{$name}', '{$email}', '{$telefon}', '{$adres}', '{$godzina}', '{$dosodb}', '{$banknot}', '{$platnosc}', '{$zamowienie}', '{$date}')") or die("Error inserting data into database");

echo<<<END
    <h2>Podsumowanie zamówienia</h2>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <td>$name</td>
    </tr>
    <tr>
        <td>$email</td>
    </tr>
    <tr>
        <td>$telefon</td>
    </tr>
    <tr>
        <td>$adres</td>
    </tr>
        <td>$godzina</td>
    </tr>
    <tr>
        <td>$dosodb</td>
    </tr>
    <tr>
        <td>$banknot</td>
    </tr>
    <tr>
        <td>$platnosc</td>
    </tr>
    <tr>
        <td>$date</td>
    </tr>
    <table>
    <h3>Zamównienie</h3>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <td>$zamowienie</td>
    </tr>
    <table>
    <br ><a href="index.php">Powrót do strony głównej</a>
END;

?>

</body>
</html>