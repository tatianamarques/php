<?php
$resultado = $_GET['resultado'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">

<title>Exercício de PHP</title>
<style type="text/css">
body {
	margin: 30px;
	padding: 20px;
	background: #FFFF66;
	font-family: Verdana;
	color: #fff;
}
.container {
	width: 300px;
	height: 210px;
	background: #FD0E35;
	padding:20px;
    box-shadow: 10px 10px 5px #FF0000;
}
.conteudo {
	width:500px;
	height:500px;
	background: #FF6037;
	padding: 20px;
	box-shadow: 10px 10px 5px #FF0000;
}
input[type=submit]{
    background-color: #80FF00;
    border: none;
    color: #0000FF;
    padding: 16px 32px;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: bolder;
    margin: 2px 1px;
    box-shadow: 2px 2px 2px #0000FF;
    cursor: pointer;
}
input[type=text]{
    margin: 3px;
    padding:4px;
    border: none;
    box-shadow: 2px 2px 2px #0000FF;
   
}
</style>
</head>
<body>
 <div class="conteudo">
	<h3>Exercício de PHP</h3>
	<p> 2) Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes.</p>

<div class="container">
	<form id="form1" name="form1" method="post" action="">
  <label>
    <input type="text" name="valor" id="valor" />
  </label>
  <input type="submit" name="button" id="button" value="Resultado" />
<input type="text" name "resultado" value="<?= $resultado?>">
  	
	</form>
</div>
</div>
</body>
</html>

