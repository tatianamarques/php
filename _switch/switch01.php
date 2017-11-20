
<?php
$diaDaSemana = date("w");
echo "Hoje é ";
switch ($diaDaSemana) {
	case 0:
		echo "Domingo <br>";
		break;
	case 1:
		echo "Segunda-feira<br>";
		break;
	case 2:
		echo "Terça-feira<br>";
		break;
	case 3:
		echo "Quarta-feira<br>";
		break;
	case 4:
		echo "Quinta-feira<br>";
		break;
	case 5:
		echo "Sexta-feira<br>";
		break;
	case 6:
		echo "Sábado";
		break;
	default:
	echo "Data Inválida!";
	break;
}
// Não precisa dar echo no switch.
?>