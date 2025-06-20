<?php
    function guessNumber() {
        $numRandom = rand(1, 100);
        $num = 0;
        echo $numRandom.PHP_EOL;

        echo "He generado un número aleatorio entre 1 y 100. ¡Intenta adivinarlo!" . PHP_EOL;

        while ($num != $numRandom) {
            $num = readline("Introduce un número: ");

            if(!is_numeric($num)) {
                echo "Por favor, introduce un número válido" . PHP_EOL;
                continue;
            }

            $num = (int)$num;

            if ($num > $numRandom) {
                echo "Más bajo. Intenta de nuevo.\n";
            } elseif ($num < $numRandom) {
                echo "Más alto. Intenta de nuevo.\n";
            } else {
                echo "¡Correcto! El número era $numRandom.\n";
            }
        }
    }

    guessNumber();
?>


