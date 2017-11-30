<?php 
//para ser uma função ela precisa sempre retornar um valor, do contrário é apenas uma subrotina.

	function ola(){

		echo "Olá, mundo!<br>";
	}; 
ola(); //Este é um exemplo de subrotina porque não tem o comando retun

	function ola2(){
		return "Eu sou uma verdadeira função.<br>";
	}

echo ola2(); //observe que para aparecer na tela tem de dar um echo.
?>