<?php
//     Ćwiczenie 1
    $tab1 = array();
    $linesCount1 = 10;
    $collumnsCount1 = 7;
    $sum1 = 0;
    for ($i = 0; $i < $linesCount1; $i++) {
        for ($j = 0; $j < $collumnsCount1; $j++) {
            $tab1[$i][$j] = rand(10,99);
        }
    }
    for ($i = 0; $i < $linesCount1; $i++) {
        for ($j = 0; $j < $collumnsCount1; $j++) {
            echo $tab1[$i][$j]." ";
            $sum1 += $tab1[$i][$j];
        }
        echo "<br>";
    }
    echo "Suma Liczb z tablicy to: ".$sum1;
    echo "<br>";
    echo "<br>";
    // Ćwiczenie 2
    $tab2 = array();
    $linesCount2 = 11;
    $collumnsCount2 = 11;
    for ($i = 0; $i < $linesCount2; $i++) {
        for ($j = 0; $j < $collumnsCount2; $j++) {
            if ($i==$j||$j-$collumnsCount2+$i+1==0) {
                $tab1[$i][$j] = 1;
            } else {
                $tab1[$i][$j] = 0;
            }
        }
    }
    for ($i = 0; $i < $linesCount2; $i++) {
        for ($j = 0; $j < $collumnsCount2; $j++) {
            echo $tab1[$i][$j]." ";
        }
        echo "<br>";
    }
    echo "<br>";
    // Ćwiczenie 3
    $tab3 = array();
    $linesCount3 = 11;
    $collumnsCount3 = 11;
    for ($i = 0; $i < $linesCount3; $i++) {
        for ($j = 0; $j < $collumnsCount3; $j++) {
            if ($i%2==0)
            {
                if ($j%2==0) {
                    $tab3[$i][$j] = 'X';
                } else {
                    $tab3[$i][$j] = 'O';
                }
            } else {
                if ($j%2==0)
                {
                    $tab3[$i][$j] = 'O';
                } else {
                    $tab3[$i][$j] = 'X';
                }
            }
        /*
            if (($i+$j)%2==0) {
                $tab3[$i][$j] = 'X';
            } else {
                $tab3[$i][$j] = 'O';
            }
        */
        }
    }
    for ($i = 0; $i < $linesCount3; $i++) {
        for ($j = 0; $j < $collumnsCount3; $j++) {
            echo $tab3[$i][$j]." ";
        }
        echo "<br>";
    }
    echo "<br>";
    // Bubble sort czy coś nwm
    $tab4 = array();
    $linesCount4 = 10;
    $temp = 0;
    for ($i = 0; $i < $linesCount4; $i++) {
        $tab4[$i] = rand(10, 99);
    }
    echo "Przed sortowaniem: ";
    for ($i = 0; $i < $linesCount4; $i++) {
        echo $tab4[$i]." ";
    }
    echo "<br>";
    for ($j = 0; $j < $linesCount4; $j++) {
        for ($i = 0; $i < $linesCount4 - 1; $i++) {
            if ($tab4[$i] > $tab4[$i + 1]) {
                $temp = $tab4[$i];
                $tab4[$i] = $tab4[$i+1];
                $tab4[$i+1] = $temp;
            }
        }
    }
    echo "Po sortowaniu: ";
    for ($i = 0; $i < $linesCount4; $i++) {
        echo $tab4[$i]." ";
    }
    echo "<br>";
    echo "<br>";
    
    // Ćwiczenie 4
    $tab5 = array();
    $linesCount5 = 20;
    for ($i = 0; $i < $linesCount5; $i++) {
        $tab5[$i] = rand(100, 999);
    }
    for ($i = 0; $i < $linesCount5; $i++) {
        echo $tab5[$i]." ";
    }
    echo "<br>";
    sort($tab5);
    for ($i = 0; $i < $linesCount5; $i++) {
        echo $tab5[$i]." ";
    }
    echo "<br>";
    print_r($tab5);
    echo "<br>";
    echo "<br>";
    
    // Ćwiczenie 5
    $tab5 = array();
    $tab5Temp = array();
    $linesCount5 = 10;
    $collumnsCount5 = 10;
    // Przypisanie
    for ($i = 0; $i < $linesCount5; $i++) {
        for ($j = 0; $j < $collumnsCount5; $j++) {
            $tab5[$i][$j] = rand(10,99);
        }
    }
    // Wypisanie nie posortowanej
    for ($i = 0; $i < $linesCount5; $i++) {
        for ($j = 0; $j < $collumnsCount5; $j++) {
            echo $tab5[$i][$j] . " ";
        }
        echo "<br>";
    }
    // Sortowanie kolumn
    for ($i = 0; $i < $linesCount5; $i++) {
        for ($j = 0; $j < $collumnsCount5; $j++) {
            $tab5Temp[$j][$i] = $tab5[$i][$j];
        }
    }
    for ($j = 0; $j < $collumnsCount5; $j++) {
        sort($tab5Temp[$j]);
    }
    for ($i = 0; $i < $linesCount5; $i++) {
        for ($j = 0; $j < $collumnsCount5; $j++) {
            $tab5[$j][$i] = $tab5Temp[$i][$j];
        }
    }
    // Wypisanie posortowanej
    echo "<br>";
    for ($i = 0; $i < $linesCount5; $i++) {
        for ($j = 0; $j < $collumnsCount5; $j++) {
            echo $tab5[$i][$j]." ";
        }
        echo "<br>";
    }
    echo "<br>";
    // Ćwiczenie 6
    $tab6 = array();
    $collumnsCount6 = 30;
    for ($i = 0; $i < $collumnsCount6; $i++) {
        if ($i%7==0)
        {
            $tab6[$i] = 7;
        }
        else
        {
            $tab6[$i] = 0;
        }
        echo $tab6[$i].' ';
    }