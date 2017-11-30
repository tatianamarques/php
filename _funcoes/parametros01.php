<?php 
	/*function ola($texto){
		return "Olá, $texto!<br>";
	}

	echo ola("Mundão");
	echo ola("Taty");
	echo ola("Rique");*/

	//fica a critério definir ou não um valor padrão para a variável. Se definir como abaixo, ela passa a aparecer sem precisar especificar.

	/*function ola($texto = "MUndo"){
		return "Olá, $texto!<br>";
	}

	echo ola();
	echo ola("");
	echo ola("Taty");
	echo ola("Rique");*/

//passando mais de um parâmetro
		function ola($texto = "Mundo", $periodo = "Bom dia!"){
		return "Olá, $texto! $periodo<br>";
	}

	echo ola();
	echo ola("", "Boa tarde");
	echo ola("Taty", "Boa noite");
	echo ola("Rique", "");
?>
