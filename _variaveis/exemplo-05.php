<?php
	$nome = "Taty";

	function teste(){
		global $nome; //quero ouvir dentro desta função a variável que foi criada fora. Se não fizer assim a chamada da função vai dar erro porque não vai entender qual é o valor que se quer.
		echo $nome;
	}
	
	function teste2() {
		$nome = "Paty"; //obeserve que aqui optei por não usar a variável gobal, defini uma nova.
		echo $nome;

	}
	teste();
	echo "<br/>";
	teste2();
?>