<?php
require_once 'SimpleSingleton.php';



class SingletonTest
{
    public function testResult()
    {
        $result1 = Singleton::getInstance();
        $result2 = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $result1); //сообщает об ошибке е второе не является экзеипляром первого
        $this->assertSame($result1, $result2);  // сообщает об ошибки если две переменные не имеют одного и того же типа и значения
    }
}