<?php

class Twitter implements Social
{
    public function send($msg)
    {
        echo $msg . "Twitter" . PHP_EOL;
    }

    public function getLikes()
    {
        return 100;
    }
}