<?php


$msg = "Before Sunrise tercera palabra salto";
$clue = "La casa de Bernarda Alba";


define('HIDDEN_CHAR', '_'); 

$count = 0;



$hidden =HIDDEN_CHAR;
for ($i = 0; $i < strlen($msg); $i++) {
    if (ctype_alpha($msg[$i])) {
        $hidden .= HIDDEN_CHAR; 
    } else {
        $hidden .= $msg[$i];
    }
    if ($msg[$i] == ' ') {
        $count++;
        if ($count % 3 == 0) {
            $hidden .= PHP_EOL;
        }
    }
}

echo $hidden . PHP_EOL . $clue; 




