<?php
	require_once("../conexao/conexao.php");
	// teste de segurança
	session_start();

	if (!isset($_SESSION['user'])) {
		header("Location: ../index.php");
	}
	//fim do teste

	$SQL = "SELECT * FROM usuarios";

	$usuarios = mysqli_query($conexao,$SQL);

	if (!$usuarios) {
		die('Falha na pesquisa');
	}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Moiras</title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<link rel="stylesheet" href="../css/usuarios.css">

</head>

<body>
	<h1>
		<img src="<?php echo $_SESSION['perfil'];?>">
		Bem Vindo

		<?php 
				echo $_SESSION['user']; 
			?>
		<button class="sair">
		<i class="fas fa-sign-out-alt"></i> <a href="sair.php">SAIR</a>
		</button>

		
	</h1>
	<main>
		<?php
			while ($dados_usuarios = mysqli_fetch_assoc($usuarios)) {
		?>
		<figure class=imagem>
			<img src="<?php echo $dados_usuarios['img_pequena']; ?>">
			<figcaption class="nomeusuario"> <?php echo $dados_usuarios["Nome_Usuario"]; ?></figcaption>
		</figure>
		<?php
		}
	?>
	</main>
</body>

</html>