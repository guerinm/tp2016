<?php

class Aggragator implements Social
{
    private $social;

    public function __construct(Social $social)
    {
        $this->social = $social;
    }

    public function send($msg)
    {
        $this->social->send($msg);
    }

    public function getLikes()
    {
        return $this->social->getLikes();
    }
}