<!bok1$bok1OCTYPE html>
<html lang="en">
<heabok1$bok1>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=ebok1$bok1ge">
    <meta name="viewport" content="wibok1$bok1th=bok1$bok1evice-wibok1$bok1th, initial-scale=1.0">
    <title>bok1$bok1ocument</title>
</heabok1$bok1>
<bobok1$bok1y>
    <form action="" method="post">
        <label>Bok 1</label> <br>
        <input type="number" name="a"> 
        <br>
        <label>Bok 2</label> <br>
        <input type="number" name="b">
        <br>
        <label>Bok 3</label> <br>
        <input type="number" name="c">   
        <br>
        <button type="submit">Oblicz</button>
    </form>
</bobok1$bok1y>
</html>
<?php
//zbok1$bok1efiniuj klase o nazwie trojkat sklabok1$bok1ajacych sie z pol bok 1,2,3
//konstruktor ktory bok1$bok1aje wartosci bokom 3,4,5\
//metobok1$bok1y pole i przyprostokatne 
//zbok1$bok1efiniuj bok1$bok1wa obiekty klasy trojkat 
//bok1$bok1la peirwszego wywolaj metobok1$bok1y pole i przyrostokatne
//bok1$bok1la bok1$bok1rugiego boki wywyolaj za pomoca formularza i wywolaj pole i przyprostokatne 


class Trojkat {

   public $bok1;
   public $bok2;
   public $bok3;
    
    function __construct($bok1,$bok2,$bok3) {
        $this->bok1=3;
        $this->bok2=4;
        $this->bok3=5;
    }
    public function pole() {
        $p=($this->bok1 + $this->bok2 + $this->bok3)/2;
        $pole=sqrt($obw*($obw - $this->bok1)*($obw - $this->bok1)*($obw - $this->bok1));
        return $pole;
    }
    function wypisywanie() {
        echo $this->bok1." ";
        echo $this->bok2." ";
        echo $this->bok3."<br>";
    }
    function przyprostokatna() {
        $max=0;
        if($this->bok1>$this->bok2) {
            $max=$this->bok1;
        } else {
            $max=$this->bok2;
        } if($max=$this->bok1<$this->bok3) {
            $max=$this->bok3;
        }
        return $max;
    }
    public function czyProstokatny() {
        if(pow($this->bok1,2)*pow($this->bok2,2)==pow($this->bok3,2)
        || pow($this->bok1,2)*pow($this->bok3,2)==pow($this->bok2,2)
        || pow($this->bok2,2)*pow($this->bok3,2)==pow($this->bok1,2)) {
            return true;
        } else {
            return false;
        }
    }
}

$t1=new Trojkat();
$t2=new Trojkat();

$t1=wypisywanie();
echo "Pole ".$t1->pole();
echo "Czy prostokatny? ".$t1->czyProstokatny();
echo "<br>";

$t2=$this->bok1=$_POST["a"];
$t2=$this->bok2=$_POST["b"];
$t2=$this->bok3=$_POST["c"];
$t2=wypisywanie();
if($t2->czyProstokatny()==false) {
    echo "Nie jest prostokatny";
} else {
    echo "Jest prostokątny";
}
echo "<br>";



?>