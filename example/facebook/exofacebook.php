<?php

abstract class Social {
    protected $msg;

    public function __construct($msg)
    {
        $this->msg = $msg;
    }

    public abstract function getMsg();
}

class Facebook extends Social {
    public function getPost() {
        return $this->msg;
    }

    public function getMsg()
    {
        return $this->msg;
    }
}

class Twitter extends Social {
    public function getTweet() {
        return $this->msg;
    }

    public function getMsg()
    {
        return $this->msg;
    }
}

class Reseau {
    private $msg;

    public function __construct($reseau)
    {
        $this->msg = $reseau->getMsg();

//        if($reseau instanceof Twitter) {
//            $this->msg = $reseau->getTweet();
//        }
//
//        if($reseau instanceof Facebook) {
//            $this->msg= $reseau->getPost();
//        }
    }

    public function getMsg() {
        return $this->msg;
    }
}

$facebook = new Facebook('Message pour Facebook');
$twitter = new Twitter('Message pour Twitter');

$reseau = new Reseau($twitter);
echo $reseau->getMsg();