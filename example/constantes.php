<?php

class Person
{
    const MAX_PERSON = 10;

    public function __construct() { }

    public function displayConst() {
        echo 'test : ' . self::MAX_PERSON;
    }
}

$p = new Person();

echo $p->displayConst();