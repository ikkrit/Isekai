<?php

    require_once "Hero.php";
    require_once "Marlo.php";

    $hero = new Hero("Varan");
    $choice = 10;
    $hero->setClass($choice);
    $hero->setSkills($choice);
    $hero->setLife($choice);
    echo($hero->hero_description());die;
    $marlo = new Marlo("Marlo");

    $marlo->description_marlo();

    

?>