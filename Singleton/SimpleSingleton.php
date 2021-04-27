<?php
declare(strict_types=1);

class Singleton
{

    private static $instance;
    public $a;

    static public function getInstance()
    {
        return static::$instance ?? (static::$instance = new static());
    }

    private function __construct(){
    }

}

$firstResult = Singleton::getInstance();
$secondResult = Singleton::getInstance();

$firstResult->a = 1;
$secondResult->a = 2;

print_r($firstResult->a); // 2

print_r($secondResult->a);// 2

print_r($firstResult === $secondResult); //true


