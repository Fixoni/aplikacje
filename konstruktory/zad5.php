<?php

class Osoba {

    public $nazwisko;
    public $wzrost;
    public $waga;

    function __construct() {
        $this->nazwisko="Kowalski";
        $this->wzrost=180;
        $this->waga=75;
    }
    public function wypisywanie() {
        echo "Nazwisko: ".$this->nazwisko."<br>";
        echo "Wzrost: ".$this->wzrost."<br>";
        echo "Waga: ".$this->waga."<br>";
    }
    public function czyWysoki() {
        if($this->wzrost>=180) {
            echo "Tak";
        } else {
            echo "Nie";
        }
    }
}

class Uczen extends Osoba {
    public $szkola;
    public $sredniaocen;

    public function wypiwanie2() {
        echo "Szkoła: ".$this->szkola."<br>";
        echo "Średnia ocen: ".$this->sredniaocen."<br>";
    }
    function __construct($szkola, $sredniaocen) {
        $this->szkola=$szkola;
        $this->sredniaocen=$sredniaocen;
    }
}

class Pracownik extends Osoba {
    public $zawod;
    public $zarobek;

    public function wypisywanie3() {
        echo "Zawod: ".$this->zawod="Programista"."<br>";
        echo "Zarobek: ".$this->zarobek=30000;
    }
}


$plik=fopen("uczen.txt","r");
$szkola=fgets($plik);
$sredniaocen=fgets($plik);
echo $szkola." średnia ocen: ".$sredniaocen."<br>";

$uczen=new Uczen($szkola,$sredniaocen);
$uczen->wypisywanie();
echo "Czy wysoki? ".$uczen->czyWysoki();
echo "<br>";

$osoba=new Osoba();
$osoba->wypisywanie();

$pracownik=new Pracownik();
$pracownik->wypisywanie3();


?>