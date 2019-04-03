<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
	<!-- pure -->
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<!--nosso css -->
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title></title>
</head>

<body>
	<div id="geral">
		<header>
			<h1>Cantina </h1>
		</header>
		<main>
			<p style="color:red;text-align:center;">Responsável: <?php echo $_SESSION['id']; ?></p>
			<p style="color:red;text-align:center;">Usuário: 
			<?php echo $_SESSION['usuario']; ?></p>
			<p style="color:red;text-align:center;">Email: 
			<?php echo $_SESSION['email']; ?></p>

			<form id="form" class="pure-form pure-form-stacked" action="atualiza_aluno.php" method="post">

				<input type="text" name="aluno" class="pure-input-rounded" placeholder="Aluno"><br>
				<input type="text" name="usuario" class="pure-input-rounded" placeholder="Nome de usuário do aluno"><br>
				<input type="text" name="senha" class="pure-input-rounded" placeholder="Senha do aluno"><br>
				<input type="text" name="responsavel" class="pure-input-rounded" placeholder="Responsável"
				value = "<?php echo $_SESSION['usuario']; ?>"><br>
				<input type="text" name="emailResponsavel" class="pure-input-rounded" value="<?php echo $_SESSION['email'] ?>"><br>
				
				<input type="text" name="saldoDia" class="pure-input-rounded" placeholder="Valor por dia"><br>
				<input type="text" name="total" class="pure-input-rounded" placeholder="Valor total"><br>
				<button type="submit" class="pure-button pure-button-primary">Enviar</button>
			</form>
		</main>
		<footer>
			<h5>Senac Lapa Tito - 2018</h5>
		</footer>
	</div>
	
</body>
</html>