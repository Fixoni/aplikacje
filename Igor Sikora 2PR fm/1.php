<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <h2>Dane osobowe</h2>
    Nazwisko <input type="text" name="nazwisko"> <br>
    Płeć: <br>
    <input type="radio" name="plec">Mężczyzna <br>
    <input type="radio" name="plec">Kobieta <br>
    Wyksztalcenie
    <select name="wyksztalcenie" id="wyksztalcenie">
        <option value="podstawowe">Podstawowe</option>
        <option value="zawodowe">Zawodowe</option>
        <option value="srednie">Średnie</option>
        <option value="wyzsze">Wyższe</option>
    </select>
    <button type="Submit">Wyślij</button>
    </form>
</body>
</html>

<?php
$n=$_POST["nazwisko"];
$p=$_POST["plec"];
$w=$_POST["wyksztalcenie"];

$plik=fopen("dane osobowe.txt","a");

if(isset($n) && isset($p) && isset($w)) {
    if($p="Mężczyzna") {
        fwrite($plik, "$n mężczyzna wykształcenie: $w ");
    } else {
        fwrite($plik, "$n kobieta wykształcenie: $w ");
    }

}

?>