
<?php
$idade = 3;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($idade <= $idadeCrianca){
	echo "Criança.";
} 
else if ($idade <= $idadeMaior) {

	echo "Aborrecente.";

} else if ($idade <= $idadeMelhor) {

	echo "Adulto.";
} else {

	echo "Idoso.";
}
echo "<br>";
echo ($idade <= $idadeMaior)?"Menor de idade.":"Maior de idade.";
?>