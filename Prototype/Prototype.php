<?php

class monster
{
    public $weapons;

    public function __clone()
    {

    }
}


$monster = new monster();
$Ork = clone $monster;
