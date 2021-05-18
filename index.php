<?php
	require_once("./conexao/conexao.php");

	session_start();

	if (isset($_POST['login'])) {
		$usuario = $_POST['user'];
		$senha   = $_POST['password'];

		$SQL = "SELECT * FROM usuarios where User = '{$usuario}' and Senha = '{$senha}'";

		$login = mysqli_query($conexao,$SQL);

		if (!$login) {
			die("Falha na pesquisa");
		}

		$informacao = mysqli_fetch_assoc($login);

		if (empty($informacao)) {   
			$msg = "Usuário e/ou Senha incorretos";
		}
		else{
			$_SESSION['user']   = $informacao['Nome_Usuario'];
			$_SESSION['perfil'] = $informacao['img_pequena'];
			header("Location: ./public/principal.php");
		}

	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Projeto Almas</title>

	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">


</head>

<body>
	<header>
		<div id="logo">
			<i class="fas fa-ghost"></i>
		</div>
		<div id="texto">
			<h1>MOIRAS - Negociando Almas desde Sempre</h1>
		</div>
	</header>
	<main>
		<h2>
			Negocie sua Alma
		</h2>
		<form action="index.php" method="POST">
			<label for="nome">
				<span>Nome da alma</span>
				<input type="text" name="user" id="nome" required>
			</label>
			<label for="password">
				<span>Senha da alma</span>
				<input type="password" name="password" id="password" required>
			</label>
			<input type="submit" name="login" value="LOGIN">
		</form>
		<?php
			if (isset($msg)) {
				echo $msg;
			}
		?>

	</main>
	<footer id="rodape">
		Rodapé
	</footer>
</body>

</html>