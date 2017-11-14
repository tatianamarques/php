
<?php
	$empresa = "Multifacetati";
	$empresa = str_replace("Multifacetati", "Multifacetaty", $empresa);

	echo $empresa;

	echo "<br>";


	$frase = "A repetição é a mãe da repetição.";

	$q = strpos($frase, "mãe");
	$palavra = "mãe";
	var_dump($q);
	echo "<br>";
	$texto = substr($frase, 0, $q);
	echo $texto;
 	echo "<br>";
	$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
	echo $texto2;

?>