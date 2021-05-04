<?php

class Human
{
    private $age;
    private $iq;

    function __construct(int $age, float $iq)
    {
        $this->age = $age;
        $this->iq = $iq;
    }
}

class CreateHuman
{
    public function Create (int $age, float $iq){
        return new Human($age, $iq);
    }
}

$humanFactory = new CreateHuman();

$men = $humanFactory->Create(27, 165);
$women = $humanFactory->Create(23,149);

print_r($men);
print_r($women);