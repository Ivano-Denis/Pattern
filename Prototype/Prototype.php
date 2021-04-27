<?php

class monster
{
    public $weapons;

    public function getWeapons($weapons){
        $this->weapons = $weapons;
    }
    public function __clone()
    {

    }
}
class goblin extends monster
{
    public function getClone(monster $spawn)
    {
        return clone $spawn;
    }
}
class ork extends monster
{
    public function getClone(monster $spawn)
    {
        return clone $spawn;
    }
}


$monster1 = new goblin();
$monster2 = new ork();


$singleArray[] = $monster1->getClone(new monster());
$singleArray[] = $monster2->getClone(new monster());

$singleArray[0]->weapons = 'knife';
$singleArray[1]->weapons = 'ax';

var_dump($singleArray);
