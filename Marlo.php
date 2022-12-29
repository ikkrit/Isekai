<?php

    class Marlo
    {
        public $name;
        public $attack = 100;
        public $life = 1000;

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function description_marlo()
        {
            echo "Ton nom est : {$this->name} avec une attaque de : {$this->attack} et {$this->life} point de vie";
        }
    }

?>