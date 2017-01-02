<?php

interface Social
{
    public function send($msg);

    public function getLikes();
}