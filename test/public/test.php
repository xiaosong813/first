<?php
class Animal
{
    private function eat()
    {
        echo 'eat';
    }

    public function __call($name, $arguments)
    {
        echo '调用不存在的方法名是：' . $name . '<br>参数是：';
        print_r($arguments);
        echo '<br>';
    }

    public static function __callStatic($name, $arguments)
    {
        echo '调用不存在的--静态--方法名是：' . $name . '<br>参数是：';
        print_r($arguments);
    }
}

$animal = new Animal();
$animal->drink();