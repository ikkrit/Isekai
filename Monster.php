<?php

    abstract class Monster
    {
        protected $name;
        protected $class;
        protected $skills;
        protected $attack;
        protected $life;

        public function __construct($name, $class,$skills,$attack,$life)
        {
            $this->name = $name;
            $this->class = $class;
            $this->skills = $skills;
            $this->attack = $attack;
            $this->life = $life;
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

        public function setSkills($skills)
        {
                $this->skills = $skills;

                return $this;
        }

        public function getAttack()
        {
                return $this->attack;
        }

        public function setAttack($attack)
        {
                $this->attack = $attack;

                return $this;
        }

        public function getLife()
        {
                return $this->life;
        }

        public function setLife($life)
        {
                $this->life = $life;

                return $this;
        }
    }

?>