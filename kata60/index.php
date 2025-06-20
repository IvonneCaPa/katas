<?php

    echo "Introduce un número: ";
    $num = readline();

    function guessNumber(int $num):string
    {
        $numRandom = rand(1, 100);
        $msg = "";

        if($num === $numRandom){
            $msg = "adios";
        } else{
            $msg = match(true){
                $num > $numRandom => "más bajo",
                $num < $numRandom => "más alto",
            };
        }

        return $msg;
    }

    echo guessNumber($num);