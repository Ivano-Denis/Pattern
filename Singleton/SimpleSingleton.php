<?php
declare(strict_types=1);

class Singleton
{

    private static $instance;
    public $item;

    static public function getInstance()
    {
        return static::$instance ?? (static::$instance = new static());
    }

    private function __construct(){
    }

}

$firstResult = Singleton::getInstance();
$secondResult = Singleton::getInstance();

$firstResult->item = 1;
$secondResult->item = 2;

print_r($firstResult->item); // 2

print_r($secondResult->item);// 2

var_dump($firstResult === $secondResult); //true


