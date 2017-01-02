<?php

require 'Social.php';
require 'Facebook.php';
require 'Twitter.php';
require 'Aggregator.php';

$facebook = new Facebook();

$aggregator = new Aggragator($facebook);
$aggregator->send("J'envoie en message sur " );
echo $aggregator->getLikes();

echo PHP_EOL;

$twitter = new Twitter();
$aggregator = new Aggragator($twitter);
$aggregator->send("J'envoie en message sur " );
echo $aggregator->getLikes();