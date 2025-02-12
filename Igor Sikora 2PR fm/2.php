<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
</head>
<body>
    <h2>Szkoła</h2>
    <form action="" method="POST">
        <label for="przedmiot">Wybierz przedmiot</label>
        <select name="przedmioty[]" multiple>
            <?php
            $plik = fopen("dane.txt","r");
            for ($i=0; $i < 6; $i++) { 
                $wiersz = explode(" ",fgets($plik));
                echo '<option value="'.$wiersz[0].' '.$wiersz[1].'">'.$wiersz[0].'</option>';
            }
            fclose($plik);
            ?>
        </select>
        <br>
        <label for="nazwisko">Podaj Nazwisko</label>
        <input type="text" name="nazwisko" id="nazwisko">
        <br>
        <button type="submit">Wyślij</button>
    </form>
    <?php
    if (!empty($_POST)){
        if (empty($_POST['nazwisko']) || empty($_POST['przedmioty']))
        {
            echo "Proszę wprowadzić dane oraz wybrać przedmioty";
            return;
        }
        $n = $_POST['nazwisko'];
        $p = $_POST['przedmioty'];
        $srednia = 0;
        echo $n." wybrane przedmioty: ";
        for ($i=0; $i < count($p); $i++) { 
            $wiersz = explode(" ",$p[$i]);
            $srednia += $wiersz[1];
            echo $wiersz[0].", ";
        }
        $srednia /= count($p);
        echo "<br> Średnia wybranych przedmiotów: ".$srednia;

    }
    ?>
</body>
</html>