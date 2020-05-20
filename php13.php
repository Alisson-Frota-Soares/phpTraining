<?php

    echo "a) while<br><br>";
    $numero = 0;

    while ($numero <= 20) {
        
        echo !($numero % 2)? $numero : null ."<br>";
        $numero ++;

    }

    echo "<br><br>_________________________________<br>";   
    echo "b) Do while<br><br>";
    $numero = 0;

    do {
        echo !($numero % 2)? $numero : null ."<br>";//optei por usar operador condicional pois acho mais simples
        $numero ++;

    } while ($numero <= 20)



?>