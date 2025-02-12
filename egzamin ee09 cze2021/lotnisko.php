<?php
$polacz = mysqli_connect("localhost","root","","egzamin");
$zapytanie = "SELECT czas,kierunek,nr_rejsu,status_lotu FROM przyloty ORDER BY czas;";
$wynik = mysqli_query($polacz,$zapytanie);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Port Lotniczy</title>
</head>
<body>
    <table>
        <tr>
            <td>CZAS</td>
            <td>KIERUNEK</td>
            <td>NUMER REJSU</td>
            <td>STATUS</td>
        </tr>
            <?php
            while($wiersz = mysqli_fetch_array($wynik)) {
                echo "<tr>";
                echo "<td>".$wiersz['czas']."</td>";
                echo "<td>".$wiersz['kierunek']."</td>";
                echo 
            }
            ?>
    </table>
</body>
</html>
<?php
mysqli_close($polacz);
?>