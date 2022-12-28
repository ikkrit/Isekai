<?php

    abstract class World
    {
        protected $world_name;
        protected $world_zone;
        protected $world_description;
        
        public function __construct($world_name, $world_zone,$world_description)
        {
            $this->world_name = $world_name;
            $this->world_zone = $world_zone;
            $this->world_description = $world_description;
        }

        public function getWorld_name()
        {
                return $this->world_name;
        }

        public function setWorld_name($world_name)
        {
                $this->world_name = $world_name;

                return $this;
        }

        public function getWorld_zone()
        {
                return $this->world_zone;
        }

        public function setWorld_zone($world_zone)
        {
                $this->world_zone = $world_zone;

                return $this;
        }

        public function getWorld_description()
        {
                return $this->world_description;
        }

        public function setWorld_description($world_description)
        {
                $this->world_description = $world_description;

                return $this;
        }
    }

?>