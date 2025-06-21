<?php
    require_once 'Contestant.php';


    $msg = "Before Sunrise";
    $clue = "Se enamoraron en un tren";

    define('HIDDEN_CHAR', '_');
    define('WORDS_FOR_LINE_BREAK', 3);
    define('NUMBER_PLAYERS', 3);

    $player1 = new Contestant("player1");
    $player2 = new Contestant("player2");
    $player3 = new Contestant("player3");

    $guessed_letters = [];

    $current_shift = 0;

    $players = [$player1, $player2, $player3];

    echo "*** Adivina el mensaje ***" . PHP_EOL . "La pista es: " . $clue . PHP_EOL;

    while (true) {
        
        echo "Panel: ";
        $word_count = 0;
        
        for ($i = 0; $i < strlen($msg); $i++) {
            if (in_array($i, $guessed_letters)) {
                echo $msg[$i]; 
            } elseif ($msg[$i] == ' ') {
                echo " ";
                $word_count++;
                if ($word_count % WORDS_FOR_LINE_BREAK == 0) {
                    echo PHP_EOL;
                }
            } else {
                echo HIDDEN_CHAR; 
            }
        }
        echo PHP_EOL;
        
        $player_current = $players[$current_shift];
        echo "Turno de: " . $player_current->getName() . PHP_EOL;
        
        echo "Di una letra: ";
        $letter = trim(fgets(STDIN));
        
        $letter = strtoupper($letter);
        
        $letter_found = false;
        
        for ($i = 0; $i < strlen($msg); $i++) {
            if (strtoupper($msg[$i]) == $letter) {
                $guessed_letters[] = $i; 
                $letter_found = true;
            }
        }
        
        if ($letter_found) {
            echo "¡Correcto! La letra '$letter' está en el mensaje.\n";
        } else {
            echo "Incorrecto. La letra '$letter' no está en el mensaje.\n";
            
            $current_shift = $current_shift + 1;
            if ($current_shift >= NUMBER_PLAYERS) {
                $current_shift = 0; 
            }
        }
        
        echo PHP_EOL;
        
        $all_guessed = true;
        for ($i = 0; $i < strlen($msg); $i++) {
            if ($msg[$i] != ' ' && !in_array($i, $guessed_letters)) {
                $all_guessed = false;
                break;
            }
        }
        
        if ($all_guessed) {
            echo "¡FELICIDADES! Has adivinado todo el mensaje: " . $msg . "\n";
            echo "¡Juego terminado!\n";
            break;
        }
    }
?>
