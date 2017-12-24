<?php
	require_once ("config.php");

	use Cliente\Cadastro;

	$cad = new Cadastro;

	$cad->setNome("Taty");
	$cad->setEmail("taty@teste.com");
	$cad->setSenha("123456");

	$cad->registrarVenda();

?>
