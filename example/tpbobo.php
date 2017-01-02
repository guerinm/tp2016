<?php

class Person
{
    private $name;
   
 public function setName($name)
    {
        $this->name = $name;
    }
    
     public function getName()
    {
        return $this->name;
    }
 	public function sayHelloTo($other)
    {
			return ($this->getName() . " dit hello à " . $other->getName() . PHP_EOL);
		}

}

$bibi = new Person();
$bibi->setName('bibi');
//echo $bibi->getName();
$bobo = new person();
$bobo->setName('bobo');
//echo $bobo ->getName();
echo $bobo->sayHelloTo($bibi);
?>
