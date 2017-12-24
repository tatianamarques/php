<?php
/*Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes.*/
$number = $_POST["valor"];

if ($number % 10 == 0 && $number %5 == 0 && $number % 2 == 0) {
        echo "Divisível por 2, 5 e 10";
} elseif ($number % 10 == 0)  {
    echo "Divisível por 10";
} elseif ($number % 2 == 0)  {
    echo "Divisível por 2";
} elseif ($number % 5 == 0) {
    echo "Divisível por 5";
}else {
	echo "Não é divisível por 2, 5 ou 10.";
}


?>
<form id="form1" name="form1" method="post" action="">
  <label>
    <input type="text" name="valor" id="valor" />
  </label>
  <input type="submit" name="button" id="button" value="Resultado" />
</form>





