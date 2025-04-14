<?php

    $number = 120;

    //es un numero
    if (is_numeric($number) && filter_var($number, FILTER_VALIDATE_INT) !== false) {
        echo "es un numero " . PHP_EOL;
    }
    
    //para saber si es par
    if($number % 2 === 0 ){
        echo "es par". PHP_EOL;
    } else {
        echo "no es par" . PHP_EOL;
    } 







?>