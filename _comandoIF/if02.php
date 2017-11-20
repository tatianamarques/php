
<?php
$objetivo = 3000;
$salario = 1000;
$diferenca =$objetivo - $salario;

if ($salario == $objetivo) {
	echo "Parabéns. Objetivo atingido!";
} elseif ($salario < $objetivo){
	echo "Faltam " . $diferenca . " para atingir o objetivo.";
} else {
	echo "Você ultrapassou o seu objetivo. Parabéns!";
}
echo "<br>";

echo ($salario < $objetivo)?"Faltam " . $diferenca . " para atingir o objetivo.":"Parabéns. Objetivo atingido!";
?>