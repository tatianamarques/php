<?php 
//passagem de parâmetro por referencia: "Eu vou te mandar uma variável e o que acontecer a ela no escopo , você joga para outra varável" - usa-se o & para passar o parametro por referencia.
	$a = 10;

	function trocaValor(&$b){
		$b += 50;
		return $b;

	}
echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo trocaValor($a); //usando o & para passar o parametro por referencia faz com que mude o valor da variavel fora do escopo.
echo "<br>";
echo $a;
?>
<!--Lembrar que variável é diferente de parâmetro de função-->