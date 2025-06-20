<?php

    require_once 'Character.php';

    $barret = new Character('Barret', 572, 409, 100, ['Fight', 'Magic', 'Item']);
    $aeris = new Character('Aeris', 409, 516, 220, ['Fight', 'Magic', 'Item']);
    $cloud = new Character('Cloud', 516, 516, 25, ['Fight', 'Magic', 'Item']);

    $characters = [$barret, $aeris, $cloud];

    function getCharacterWithLessLife($characters){
        
        $characterWithLessLife = $characters[0];

        foreach ($characters as $character) {
            if($character->getCurrentLife() < $characterWithLessLife->getCurrentLife()){
                $characterWithLessLife = $character;    
            }
        }

        return $characterWithLessLife;
    }

    $characterWithLessLife = getCharacterWithLessLife($characters);
    echo "El personaje con menos vida es: " . $characterWithLessLife->getNamme() . PHP_EOL;


    $barret->useAction('Atacar');