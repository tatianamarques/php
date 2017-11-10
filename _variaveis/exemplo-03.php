<?php

//Tipos de dados BÁSICOS

//string
$nome = "Taty";
$site = "<a href='http://www.multifacetaty.com.br'>multifacetaty</a>";
//inteiro
$ano = 2017;
//Ponto flutuante - decimais
$salário = 5500.99;
//Boolean
$bloqueado = false;

echo $site;
//////////////////////////////////////
//Tipos de dados COMPOSTOS - arrays e objetos
//Array
$frutas = array("abacaxi", "laranja", "morango", "manga");
echo "<br/>";
//echo $frutas[2];
echo $frutas[0];
$nascimento = new DateTime(); //Se aparecer "new" já sabe se tratar de orientação a objetos.
//var_dump($nascimento);
///////////////////////////////////////
//Tidos de dados ESPECIAIS - resource e null
//Tipo Resource
echo "<br/>";
$arquivo = fopen("exemplo-03.php","r");
//var_dump($arquivo);

//Tipo Null
$nulo = NULL; //ausencia de valor
$vazio = " "; //espaço reservado na memória
?>