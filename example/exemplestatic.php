<?php

class Person
{
    private static $age = 10;

    public function __construct($age)
    {
        self::$age = $age;
    }

    public static function setAge($age)
    {
        self::$age = $age;
    }

    public static function getAge()
    {
        return self::$age;
    }
}

echo Person::getAge() . PHP_EOL;

Person::setAge(150);

echo Person::getAge() . PHP_EOL;

$bibi = new Person(30);

echo Person::getAge() . PHP_EOL;
Person::setAge(100);

$bobo = new Person(40);

echo Person::getAge();