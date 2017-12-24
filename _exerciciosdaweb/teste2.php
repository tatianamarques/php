<!DOCTYPE html>
<?php

function addNumbers($firstNumber, $secondNumber) {
    return $firstNumber + $secondNumber;
}

if (isset($_POST['n1']) && isset($_POST['n2'])) {
    $result = addNumbers(intval($_POST['n1']), intval($_POST['n2']));
}elseif ($result > 20) {
  echo $result + 8;
};
?>


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
	<p> 1) Construir um algoritmo que leia 2 números e
efetue a adição. Caso o valor somado seja
maior que 20, este deverá ser apresentando
somando-se a ele mais 8; caso o valor
somado seja menor ou igual a 20, este deverá
ser apresentado subtraindo-se 5.</p>

<div class="container">
	<form action="" method="POST">
	 Primeiro Número:<br>
  	<input type="text" name="n1" value=" "><br>
  	Segundo Número:<br>
  	<input type="text" name="n2" value=" "><br><br>
  	<input type="submit" name="Calcular" value="Calcular"><br><br>
  	Resultado:
  	<input type="text" name "resultado" value="<?php if (isset($result)) { ?> <?php echo $result ?><?php } ?>">
	</form>
</div>
</div>
</body>
</html>

