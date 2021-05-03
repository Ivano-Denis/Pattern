<?php

class monster
{
    public function __clone()
    {

    }
}

$monster = new monster();
$Ork = clone $monster;

var_dump($Ork);