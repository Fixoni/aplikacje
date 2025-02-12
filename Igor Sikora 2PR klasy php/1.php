<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>nazwisko</label><br>
        <input type="text" name="nazwisko"><br>
        <label>wzrost</label><br>
        <input type="number" name="wzrost"><br>
        <label>zawod</label><br>
        <input type="text" name="zawod"><br>
        <button type="submit">Wyślij</button>
    </form>
</body>
</html>
<?php
/*
zdefiuniuj klase o nazwie osoba skladajaca sie 
z pol nazwisko, wzrost
konstruktora w ktorym nazwisko to kowalski a wzrost 178
metode wypisz
kowalski wzrost 
metoda czy wysoki
prawda gdy wzrost>190;
reszta falsz
zdefiniuj klase pochodna do klasy osoba o nazwie pracownik
skladajacej sie z pola zawod
oraz metody wypisz1
ktora wypisze ten zawod
zdefiuniuj dwa obiekty klasy pracownik
dla pierwszego wywowalj metody
wypisz, czy wysoki, wypisz1
wzrost i zawod pobierz z pliku
drugi obiekty
wszystkie dane pobierz z formularza i wywolaj wszystskie metody
*/
class Osoba {
    public $nazwisko;
    public $wzrost;

    public function __construct() {
        $this->nazwisko = "Kowalski";
        $this->wzrost = 178;
    }

    public function wypisz() {
        echo "Nazwisko: " . $this->nazwisko . " wzrost: " . $this->wzrost . "<br>";
    }

    public function czyWysoki() {
        if ($this->wzrost >= 190) {
            echo "Wysoki <br>";
        } else {
            echo "Nie wysoki <br>";
        }
    }
}

class Pracownik extends Osoba {
    public $zawod;

    public function zawod($zawod) {
        $this->zawod = $zawod;
    }

    public function wypisz1() {
        echo "Zawód: " . $this->zawod . "<br>";
    }
}

$pracownik1 = new Pracownik();

$plik = fopen("dane.txt","r");
    $pracownik1->zawod = fgets($plik);
    $pracownik1->wypisz();
    fclose($plik);

    $pracownik1->czyWysoki();
    $pracownik1->wypisz1();


    $n = $_POST["nazwisko"];
    $w = (int)$_POST["wzrost"];
    $z = $_POST["zawod"];

    $pracownik2 = new Pracownik();
    $pracownik2->nazwisko=$n;
    $pracownik2->wzrost=$w;
    $pracownik2->zawod=$z;
    $pracownik2->wypisz();
    $pracownik2->czyWysoki();
    $pracownik2->wypisz1($z);

?>
