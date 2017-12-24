<?php 
class Endereco {
	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a, $b, $c){
		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
	}

	public function __destruct(){
		//var_dump("DESTRUIR");
	}
	public function __toString(){
		return $this->logradouro.", ".$this->numero." - ".$this->cidade;
	}
}
$meuend = new Endereco("rua joao", "89", "Vitória");
//var_dump($meuend);
echo $meuend. "<br>";
//print_r($meuend);
//unset($meuend);

?>