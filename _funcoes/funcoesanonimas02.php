<?php 

// Função anonima - não tem nome e não tem return, serve para verificar processos. Por exemplo, alertar quando o procsso de verificação de um bd tiver terminado.
$fn = function ($a){
	var_dump($a);
};

$fn ("Oi!");
?>