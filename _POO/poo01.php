<?php 
//Classe é um conjunto de atributos e métodos. O que é preciso armazenar fica em atributos e o que é preciso executar fica em métodos. Para usar a classe é necessário criar uma INSTÂNCIA, ou seja, um objeto (Objeto é uma variável que representa uma classe).

class Pessoa {

	public $nome;

	public function falar(){

		return "Meu nome é ".$this->nome; //("$this" só é usado no escopo do método.)
	} 
};

$tati = new Pessoa();
$tati->nome = "Tatiana.";
echo $tati->falar();
?>