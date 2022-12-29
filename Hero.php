<?php

    class Hero
    {
        private $name;
        private $class;
        private $skills;
        private $life;

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function getName()
        {
                return $this->name;
        }

        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        public function getClass()
        {
                return $this->class;
        }

        public function setClass($class)
        {
            switch($class) {
                case 1:
                    $this->class = "Necro";
                    break;
                case 2:
                    $this->class = "Paladin";
                    break;
                case 3:
                    $this->class = "Barbare";
                    break;
                case 4:
                    $this->class = "Sorcier";
                    break;
                default:
                    $this->class = "Rien";
            }

                return $this;
        }

        public function getSkills()
        {
                return $this->skills;
        }

        public function setSkills($class)
        {
                switch($class) {
                    case 1:
                        $this->skills = "Contrôle des mort-vivants";
                        break;
                    case 2:
                        $this->skills = "Epée divine";
                        break;
                    case 3:
                        $this->skills = "Frappe brutal";
                        break;
                    case 4:
                        $this->skills = "Tempete de foudre";
                        break;
                    default:
                        $this->skills = "Rien";
                }

                return $this;
        }

        public function getLife()
        {
                return $this->life;
        }

        public function setLife($class)
        {
            switch($class) {
                case 1:
                    $this->life = 80;
                    break;
                case 2:
                    $this->life = 100;
                    break;
                case 3:
                    $this->life = 120;
                    break;
                case 4:
                    $this->life = 80;
                    break;
                default:
                    $this->life = 0;
            }

                return $this;
        }

    }

?>