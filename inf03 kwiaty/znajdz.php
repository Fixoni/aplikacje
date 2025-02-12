<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl 3.css">
</head>
<body>
    <div class="baner">
        <h1>Grupa Polskich Kwiaciarni</h1>
    </div>
    <div class="srodek">
        <div class="lewy">
            <h2>Menu</h2>
            <ol>
                <li><a href="index.html">Strona główna</a></li>
                <li><a href="https://www.kwiaty.pl/" target="_blank">Rozpoznaj kwiaty</a></li>
                <li><a href="znajdz.php">Znajdź kwiaciarnie</a></li>
                <ul>
                    <li>w Warszawie</li>
                    <li>w Malborku</li>
                    <li>w Poznaniu</li>
                </ul>
            </ol>
        </div>
        <div class="prawy">
            <h2>Znajdź kwiaciarnię</h2>
            <form action="" method="post">
                Podaj nazwę miasta:
                <input type="text" name="miasto" id="miasto">
                <button type="submit" name="check">SPRAWDŹ</button>
            </form>
        </div>
        <?php
        if (isset($_POST["check"])) {
            $miasto = $_POST["miasto"];
            $polaczenie = mysqli_connect("localhost", "root", "", "kwiaciarnia");
            if (!$polaczenie) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $zapytanie1 = "SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto = '$miasto';";
            $wynik = $polaczenie->query($zapytanie1);
            if ($wynik->num_rows > 0) {
                while ($wiersz = $wynik->fetch_assoc()) {
                    echo "<h3>" . $wiersz['nazwa'] . ", " . $wiersz['ulica'] . "</h3>";
                }
            } else {
                echo "<h3>Brak wyników</h3>";
            }
            mysqli_close($polaczenie);
        }
        ?>
    </div>
    <footer>
        Stronę opracował: 00000000
    </footer>
</body>
</html>
