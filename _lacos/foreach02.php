<form>
	Nome:<input type="text" name="nome">
	<br><br>
	Nascimento:<input type="date" name="nascimento">
	<br>
	<input type="submit" name="OK">

</form>

<?php
	if (isset($_GET)) {
	foreach ($_GET as $key => $value) {
		echo "Nome do campo: ".$key."<br>";
		echo "Valor do campo: ".$value."<br>";
		echo "<hr>";
	}
}
?>