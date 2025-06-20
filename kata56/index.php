<?php

    $points = 0;
    $found = false;

    while (!false) {
        echo "Introduce una palabra:" . PHP_EOL;
        $word = trim(fgets(STDIN));
        $points = calculateWordPoints($word);
    
        if($points === 100){
            $found = true;
            echo "Felicidades!!!  La palabra $word tiene 100 puntos" . PHP_EOL; 
            exit("programa terminado")  . PHP_EOL; 
        } else {
            echo "La palabra $word tiene $points puntos\n" . PHP_EOL;
        }
    }


    function calculateWordPoints(string $word) : Int {

        $values = ["a"=>1, "b"=>2, "c"=>3,"d"=>4, "e"=>5, "f"=>6,"g"=>7, "h"=>8, "i"=>9,"j"=>10, "k"=>11, "l"=>12,"m"=>413, "n"=>14, "ñ"=>15,"o"=>16, "p"=>17, "q"=>18,"r"=>19, "s"=>20, "t"=>21,"u"=>22, "v"=>23, "w"=>24,"x"=>25, "y"=>26, "z"=>27];

        $wordArray = [];
        $points = 0;
        $letterValue = 0;

        $wordArray = str_split(strtolower($word), 1);
        
        foreach($wordArray as $letter){
            $letterValue = isset($values[$letter]) ? $values[$letter] : 0;
            $points += $letterValue;
        }
            
        return $points;
    }
 
?>