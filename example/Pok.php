<?php
  
class Arene
{

	public function battle($pokemon1, $pokemon2)
	{
		$ii = 0;
		echo "PV de " . $pokemon1->getPokemonName(). " : " . $pokemon1->getPointsVie() . PHP_EOL;
		echo "PV de " . $pokemon2->getPokemonName(). " : " . $pokemon2->getPointsVie() . PHP_EOL;
		while( ($pokemon1->getPointsVie() > 0) && ($pokemon2->getPointsVie() > 0))
		{
			$ii++;
			echo "Rond $ii". PHP_EOL;
			$pokemon1->attack($pokemon2);
			if($pokemon2->getPointsVie() > 0) {
				$pokemon2->attack($pokemon1);
			}
		}
		if($pokemon1->getPointsVie()<=0){
			echo $pokemon1->getPokemonName(). ' a perdu !'. PHP_EOL;
		}else{
			echo $pokemon2->getPokemonName(). ' a perdu !'. PHP_EOL;
		}
	}
}

$battle = new Arene();
$debut= mt_rand(0,1);

if ($debut == 0 ){
	$battle->battle($pikatchu, $ratatac);
} else {
	$battle->battle($ratatac, $pikatchu);
}

// Pokemon.php

class Pokemon
{
    private $pv = 100;
    protected $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * @param mixed $pv
     */
    public function setPv($pv)
    {
        $this->pv = $pv;
    }

    public function attack(Pokemon $pokemon) {
        $newPv = rand(0, 50);
        $pokemon->damage($newPv);
    }

    public function damage($damage) {
        if($this->pv - $damage <= 0){
            echo $this->getName() . '=> Ahhhhhhhhhhh !!!!' . PHP_EOL;

            $this->pv = 0;
            return;
        }

        $this->pv -= $damage;
    }
}

// Pikachu.php

class Pikachu extends Pokemon
{
    protected $name = 'Pikachu';

    public function attack(Pokemon $pokemon) {
        $newPv = rand(0, 50) *2;
        $pokemon->damage($newPv);
    }
}

// Ratatac.php

class Ratatac extends Pokemon
{
    protected $name = 'Ratatac';
}

// Index.php



$pikachu = new Pikachu();
$ratatac = new Ratatac();

$duel = [
    $pikachu,
    $ratatac
];

$i = rand(0, 1);

$pokemon1 = $duel[$i];
$pv = $pokemon1->getPv();

echo $pokemon1->getName() . ' => Salut je suis ' . $pokemon1->getName() . ', je vais t\'attaquer' . PHP_EOL;

while ($pv > 0) {
    $i = $i ? 0 : 1;
    $pokemon2 = $duel[$i];

    $pokemon1->attack($pokemon2);

    echo $pokemon2->getName() . ' => Je n\'ai plus que ' .$pokemon2->getPv() . ' points de vie.' . PHP_EOL;

    $pv = $pokemon2->getPv();
}