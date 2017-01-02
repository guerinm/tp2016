<?php
class Inverse

public function calcul($x){
if ($x == 0){
throw new InverseException("Message tres beau");
}
return 1/$x;
}
}