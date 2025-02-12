<?php

class Osoba {
    public $nazwisko;
    public $wzrost;
            public function wypisz() {
                $this->nazwisko;
                $this->wzrost;
            }
            public function czywysoki() {
                if($this->wzrost>=180) {
                    return "Tak";
                } else {
                    return "Nie";
                }
            }
}

$osoba = new Osoba();
$osoba->wypisz;
$osoba->nazwisko="Sikora";
$osoba->wzrost=200;
$osoba->wypisz();
?>