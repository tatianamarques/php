<?php

	//$nome = $_GET["a"];
	$nome = (int)$_GET["a"]; // toda informação inserida via get ou post é uma string, caso nessecite de um valor numérico é necessário definir o tipo int para forçar a conversão.
	//var_dump($nome);
	//$ip = $_SERVER["REMOTE_ADDR"];
	$ip = $_SERVER["SCRIPT_NAME"];
	echo $ip;
?>