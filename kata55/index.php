<?php

    $number = readline("Introduce un número: ");
    echo numbersParity($number); 

    function numbersParity (int $number) : string {
        if (is_numeric($number) && filter_var($number, FILTER_VALIDATE_INT) !== false) {
            $result = "";
            if($number % 2 == 0 ){
                for ($i = $number; $i >= 0 ; $i -= 2) { 
                    $result .= $i . PHP_EOL;
                };
            } else {
                for ($i=$number; $i >= 1; $i -= 2) { 
                    $result .= $i . PHP_EOL;
                };
            } 
            return $result;
        } else {
            return "No ha introducido un número entero";
        } 
    }
   
    

   
    
    






?>