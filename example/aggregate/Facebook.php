<?php

class Facebook implements Social
{
    public function send($msg)
    {
        echo $msg . "Facebook" . PHP_EOL;
    }

    public function getLikes()
    {
        return 10;
    }
}