<?php
/*Construir um algoritmo que leia 2 números e
efetue a adição. Caso o valor somado seja
maior que 20, este deverá ser apresentando
somando-se a ele mais 8; caso o valor
somado seja menor ou igual a 20, este deverá
ser apresentado subtraindo-se 5*/

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$adicao = $n1 + $n2;
//echo $adicao."<br>";

	If ($adicao > 20){
	//echo $adicao + 8 ."<br>";
		$resultado = $adicao + 8;
}elseif ($adicao <=20){
	//echo $adicao - 5;
		$resultado = $adicao - 5;
};
header("Location: index.php?resultado=".$resultado);
?>

