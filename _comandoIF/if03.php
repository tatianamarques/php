
<?php
$orcamento = 1000;
$taikai = 3000;
$falta = $taikai - $orcamento;

echo ($orcamento > $taikai)?"Divirta-se no Taikai":"Precisa juntar mais grana.<br>";

if ($orcamento < $taikai){
	echo "Faltam ". $falta . " reais para o Taikai."; 
}

?>