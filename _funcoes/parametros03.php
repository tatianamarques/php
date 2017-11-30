<?php 
//passagem de parâmetro por valor
	$a = 10;

	function trocaValor($b){
		$b += 50;
		return $b;

	}
echo trocaValor($a);
echo "<br>";
echo $a;
?>
<!--Lembrar que variável é diferente de parâmetro de função-->