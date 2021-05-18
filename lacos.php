<!DOCTYPE html>
<html>
<head>
	<title>Laços de Repetição</title>
</head>
<body>
	<form action="lacos.php" method="POST">
		<fieldset>
			<legend>TABUADA</legend>
			Número: <input type="text" name="VALOR">
			<p>
			<input type="submit" name="CALCULAR" value="CALCULAR">
			<p>
			<?php
				if (isset($_POST['CALCULAR'])) {
					$valor = $_POST['VALOR'];
					
					for ($i=1; $i < 11; $i++) { 
						$resultado = $valor * $i;
						echo $valor.' X '.$i." = ".$resultado.'<br>';
					}
					$somatorio       = 0;
					$multiplicatorio = 1;

					for ($i=1; $i <= $valor; $i++) { 
						$somatorio       = $somatorio + $i;
						$multiplicatorio = $multiplicatorio * $i;
 					}

					echo 'Somatório: '.$somatorio;
					echo "<br> Multiplicatório: ".$multiplicatorio;

					$i     = 2;
					$primo = true;
					while ($i < $valor) {

						if ($valor % $i == 0) {
							$primo = false;
						}

						$i++;
					}

					if ($primo == true) {
						echo "<br>".$valor." é PRIMO";
					}
					else{
						echo "<br>".$valor." não é PRIMO";
					}
				}
				
			?>
		</fieldset>
	</form>

</body>
</html>