<?php

class monster
{
    public $weapons;

    public function __clone()
    {

    }
}
class goblin
{
    public function getClone($spawn)
    {
        return clone $spawn;
    }
}
class ork
{
    public function getClone($spawn)
    {
        return clone $spawn;
    }
}

$monster = new monster();
$monster1 = new goblin();
$monster2 = new ork();


$singleArray[] = $monster1->getClone($monster);
$singleArray[] = $monster2->getClone($monster);

$singleArray[0]->weapons = 'knife';
$singleArray[1]->weapons = 'ax';

var_dump($singleArray);
