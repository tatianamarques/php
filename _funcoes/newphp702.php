<?php 
	function soma(float...$valores){
		return array_sum($valores);
	}

	echo var_dump(soma(2.1,2.2)) ."<br>";
	echo soma(25,33)."<br>";
	echo soma(1.5,3.2)."<br>"; //agora aparece o flot porque foi definido lá encima.
?>