<?php

    class Hero
    {
        public $name;
        public $class;
        public $skills;
        public $life;
        
        public function __construct($name,$class)
        {
            $this->name = $this->setName($name);
            $this->class = $this->setClass($class);
            $this->skills = $this->setSkills($class);
            $this->life = $this->setLife($class);
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
                $this->class = $class;

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
                    case 2:
                        $this->skills = "Epée divine";
                    case 3:
                        $this->skills = "Frappe brutal";
                    case 4:
                        $this->skills = "Tempete de foudre";
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
                case 2:
                    $this->life = 100;
                case 3:
                    $this->life = 120;
                case 4:
                    $this->life = 80;
                default:
                $this->life = 0;
            }

                return $this;
        }

        public function description()
        {
            echo "Le nom de ton hero est : {$this->name} de la class : {$this->class}\n ta competence heroique est : {$this->skills}\n tu commence avec {$this->life} de point de vies";
        }
    }

?>