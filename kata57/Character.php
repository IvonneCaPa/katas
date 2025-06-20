<?php

    class Character{
        public function __construct(
            public string $name,
            public int $currentLife,
            public int $currentMagic,
            public int $magicMax,
            public array $actions,
        ) { }

        public function getNamme() {
            return $this->name;
        }

        public function getCurrentLife() {
            return $this->currentLife;
        }

        public function useAction($actions){
            echo $this->name . " ha usado la acción " . $actions . PHP_EOL;
        }
    }
