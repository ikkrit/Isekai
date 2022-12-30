<?php

    class Boss
    {
        private $boss_zone;
        private $boss_name;
        private $boss_class;
        private $boss_skills;
        private $boss_life;


        public function __construct($boss_zone)
        {
                $this->boss_zone = $boss_zone;
        }


        public function getBoss_zone()
        {
                return $this->boss_zone;
        }

        public function setBoss_zone($boss_zone)
        {
                $this->boss_zone = $boss_zone;

                return $this;
        }
        
        public function getBoss_name()
        {
                return $this->boss_name;
        }

        public function setBoss_name($boss_name)
        {
                $this->boss_name = $boss_name;

                return $this;
        }

        public function getBoss_class()
        {
                return $this->boss_class;
        }

        public function setBoss_class($boss_class)
        {
                $this->boss_class = $boss_class;

                return $this;
        }

        public function getBoss_skills()
        {
                return $this->boss_skills;
        }

        public function setBoss_skills($boss_skills)
        {
                $this->boss_skills = $boss_skills;

                return $this;
        }

        public function getBoss_life()
        {
                return $this->boss_life;
        }

        public function setBoss_life($boss_life)
        {
                $this->boss_life = $boss_life;

                return $this;
        }

    }

?>