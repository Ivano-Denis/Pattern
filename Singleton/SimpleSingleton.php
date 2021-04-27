<?php
declare(strict_types=1);

class Singleton
{

    private static $instance;

    static public function getInstance()
    {
        return static::$instance ?? (static::$instance = new static());
    }

    private function __construct(){
    }

}



