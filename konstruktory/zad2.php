<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>Licznik</label>
        <input type="number" name="l">
        <br>
        <label>Mianownik</label>
        <input type="number" name="m">
        <br>
        <button type="submit">Oblicz</button>
    </form>
</body>
</html>


<?php

$l=$_POST["l"];
$m=$_POST["m"];
if($m==0){
    echo "Mianownik nie moze wynosic 0";
}

class Ulamek {

    public $licznik;
    public $mianownik;

    public function __construct() {
        $this->licznik = 12;
        $this->mianownik = 36;
    }

    public function wypisz() {
        echo $this->licznik . "/" . $this->mianownik . "<br>";
    }

    public function skracanie() {
        $a = $this->licznik;
        $b = $this->mianownik;
        
        while ($a != $b) {
            if ($a > $b) {
                $a = $a - $b;
            } else {
                $b = $b - $a;
            }
        }
        
        $NWD = $a;
        $this->licznik = $this->licznik / $NWD;
        $this->mianownik = $this->mianownik / $NWD;
        return $this;
    }
}

$u = new Ulamek();
$u->wypisz();
$u->skracanie();
echo "Ułamek po skróceniu: ";
$u->wypisz();
?>

