<?php

class Magic
{
    public function __construct()
    {
        echo "Hello" . PHP_EOL;
        
    }

    public function __destruct()
    {
        
        echo "Ciao" . PHP_EOL;
        
    }
}

$magic = new Magic();


?>