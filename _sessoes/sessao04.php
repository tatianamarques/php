<?php
//funçoes para sessoes - consultar https://secure.php.net/manual/pt_BR/book.session.php
//session_start();

echo session_save_path() . "<br>";

//session_destroy();

//var_dump(session_status()). "<br>";

switch (session_status()) {
	case PHP_SESSION_DISABLED:
	echo "Desabilitada";
	break;
	case PHP_SESSION_NONE:
	echo "Sessão está habilitada, mas não existe";
	break;
	case PHP_SESSION_ACTIVE:
	echo "Sessão ativa.";
	break;
}

?>
