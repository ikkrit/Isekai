<?php

    require_once "Hero.php";

    $hero = new Hero("Gardan", 1);

    echo ($hero->getName());die;

    $hero->description();

?>