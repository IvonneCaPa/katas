<?php

    class Contestant
    {
        private $name;
        private $points;

        public function __construct($name)
        {
            $this->name = $name;
            $this->points = 0;
        }

        public function getName(){
            return $this->name;
        }

        public function getPoints(){
            return $this->points;
        }

        public function setPoints($points){
            $this->points = $points;
        }

        public function sayLetter($letter){
            return strtoupper(trim($letter));
        }
    }

?>