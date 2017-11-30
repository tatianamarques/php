<?php 
	function soma(int...$valores){
		return array_sum($valores);
	}

	echo soma(2,2)."<br>";
	echo soma(25,33)."<br>";
	echo soma(1.5,3.2)."<br>";//esse não vai valer por ser flutuante e não inteiro. Ele ignora o que vem apos o ponto.
	//O nome deste recurso é "Declaração de tipos escalares".
?>