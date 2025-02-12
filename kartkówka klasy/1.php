<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>Bok1</label>
        <input type="number" name="a"> <br>
        <label>Bok2</label>
        <input type="number" name="b"> <br>
        <button type="submit">Wyślij</button>
    </form>
</body>
</html>
<?php
class Prostokat {
    public $bok1;
    public $bok2;
    function __construct() {
        $this->bok1=5;
        $this->bok2=8;
    }
    public function wypisz() {
        echo "Boki prostokąta wynoszą ".$this->bok1.",".$this->bok2." cm <br>";
    }
    public function pole() {
        $p=($this->bok1*$this->bok2);
        echo "Pole wynosi: ".$p."<br>";
    }
}
class Kwadrat extends Prostokat {
    public $kolorwypelnienia;
    function __construct() {
        $this->kolorwypelnienia=$kolorwypelnienia;
    }
    public function wypisz1() {
        echo "Kolor wypelnienia: ".$this->kolorwypelnienia."<br>";
    }
}

$a = new Prostokat();
$a->wypisz();
$a->pole();

$bok1=$_POST["a"];
$bok2=$_POST["b"];

$b = new Prostokat($bok1, $bok2);
$b->wypisz();
$b->pole();

$c = new Kwadrat();
$plik=fopen("dane.txt","r");
$this->bok1=fgets($plik);
$this->bok2=fgets($plik);
$this->kolorwypelnienia=fgets($plik);
$c->wypisz();
$c->pole();


?>