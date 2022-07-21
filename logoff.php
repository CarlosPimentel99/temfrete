<?php 
	
	session_start();

	session_destroy();

	header('Location: index.php');

	//remover indices do array de sessão
	//unset() 

	//destruir a variavel de sessao
	//session_destroy()

	


?>