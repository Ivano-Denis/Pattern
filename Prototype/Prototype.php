<?php

class Monster
{
    public function __clone()
    {

    }
}

$monster = new Monster();
$Ork = clone $monster;

var_dump($Ork);