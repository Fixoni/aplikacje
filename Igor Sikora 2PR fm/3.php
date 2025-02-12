<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <h2>Zamówienie pizzy</h2><br>
        Wybór pizzy
        <select name="pizza" id="pizza">
            <option value="peperoni">Peperonii</option>
            <option value="margharitta">Margharitta</option>
            <option value="hawajska">Hawajska</option>
        </select> 
        <br> Czy rabat?
        <input type="checkbox" name="rabat">
        <br>
        <button type="Submit">Wyślij</button>
    </form>
</body>
</html>
<?php
$p=$_POST["pizza"];
$r=$_POST["rabat"];

$s=0;

if($p=="peperoni") {
    $s=$s+30;
}
if ($p=="margharitta") {
    $s=$s+35;
} 
if($p=="hawajska") {
    $s=$s+40;
} 
if(isset($p)) {
if($r==true) {
    $w=$s-($s*0.1);
    echo "Zamówienie kosztuje ".$w;
} else {
    echo $s;
}
}
?>