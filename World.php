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
    }

?>