<?php 
abstract class Animal {
	public function falar(){
		return "Som";
	}
	public function mover(){
		return "Anda";
	}
}

class Cachorro extends Animal{
	public function falar(){
		return "Late";
	}
}
class Gato extends Animal{
	public function falar(){
		return "Mia";
	}
}

class Passaro extends Animal{
	public function falar(){
		return "Canta";
	}
	public function mover(){
		return "Voa e " . parent::mover(); //aqui estamos chamando a função pai também.
	}
}

$pitbull = new Cachorro();
echo $pitbull->falar() . "<br>";
echo $pitbull->mover() . "<br>";
echo "--------------------------". "<br>";
$gato = new Gato();
echo $gato->falar() . "<br>";
echo $gato->mover() . "<br>";
echo "--------------------------". "<br>";
$sabia = new Passaro();
echo $sabia->falar() . "<br>";
echo $sabia->mover() . "<br>";
?>