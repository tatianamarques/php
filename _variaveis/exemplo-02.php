<?php
//Como nomear variáveis - Regras
$anoNascimento = 1974;
$nome1 = "Taty";
$sobrenome = "Marques";
//$nomeCompleto = $nome1 ." ". $sobrenome;
$nomeCompleto = "$nome1 $sobrenome"; //Outra possibilidade de concatenação em string
echo "Seu nome é  $nomeCompleto";
exit;
//////////////////////
//formas de comentar 
/* comentar
mais de uma linha*/

echo "<br/>";
//unset ($nome1);
if(isset($nome1)){
	echo $nome1;
}

?>