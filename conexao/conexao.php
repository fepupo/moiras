<?php
	$servidor = "localhost";
	$usuario  = "root";
	$senha    = "root";
	$banco    = "moiras";

	$conexao  = mysqli_connect($servidor,$usuario,$senha,$banco);

	if (mysqli_connect_errno()) {
		die("Falha na conexão: Erro Nº ".mysqli_connect_errno());
	}
?>