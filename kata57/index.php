<?php

    $characters = [
        [
            'name' => 'Barret',
            'currentLife' => 572,
            'currentMagic' => 130,
            'magicMax' => 409,
            'actions' => ['Fight', 'Magic', 'Item']
        ],
        [
            'name' => 'Aeris',
            'currentLife' => 409,
            'currentMagic' => 121,
            'magicMax' => 516,
            'actions' => ['Fight', 'Magic', 'Item']
        ],
        [
            'name' => 'Cloud',
            'currentLife' => 516,
            'currentMagic' => 57,
            'magicMax' => 516,
            'actions' => ['Fight', 'Magic', 'Item']
        ]
    ];

// personaje con menos vida
function getCharacterWithLeastLife($characters) {
    $characterWithLessLife = $characters[0];
    foreach ($characters as $character) {
        if ($character['currentLife'] < $characterWithLessLife['currentLife']) {
            $characterWithLessLife = $character;
        }
    }
    return $characterWithLessLife;
}

// cuando hay accion
function useOrder($personaje, $pedido) {
    echo "{$personaje['name']} ha usado el pedido '{$pedido}'.\n";
}

// Ejemplo de uso
$characterWithLessLife = getCharacterWithLeastLife($characters);
echo "El personaje con menos vida es: {$characterWithLessLife['name']}\n";

useOrder($characters[0], 'Atacar');
