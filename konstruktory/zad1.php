<?php

class Pojazd {
    public $marka;
    public $kolor;
    public $rocznik;
    
    public function malowanie() {
        $this->kolor="Czerwony";
        echo ("<br>Przemalowano auto <br>");
    }
    public function falszowanie() {
        $this->rocznik=2024;
        echo ("<br>Zmieniono rocznik <br>");
    }
    /*
    function __construct() {
        $this->marka="Fiat 126p";
        $this->kolor="Fioletowy";
        $this->rocznik=1942;
    }
    */
    function __construct($marka, $kolor, $rocznik) {
        $this->marka=$marka;
        $this->kolor=$kolor;
        $this->rocznik=$rocznik;
    }
    function __destruct() {
        echo "Usunieto obiekt";
    }
}

$autko=new Pojazd("Ferrari","Cyan",2024);
/*
$autko->marka="Opel";
$autko->kolor="Czarny";
$autko->rocznik=2002;
*/


echo ("Kolor auta: ".$autko->kolor."<br> Marka: ".$autko->marka."<br> Rocznik: ".$autko->rocznik." <br>");
$autko->malowanie();
echo ("Kolor auta: ".$autko->kolor);
$autko->falszowanie();
echo ("Rocznik auta: ".$autko->rocznik);




?>