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
			<form id="form" class="pure-form pure-form-stacked" action="#" method="post">
				<input type="text" name="usuario" class="pure-input-rounded" placeholder="Usuário"><br>
				<input type="password" name="senha" class="pure-input-rounded" placeholder="Senha"><br>
				<input type="text" name="email" class="pure-input-rounded" placeholder="Email"><br>
				<select name="perfil" id="perfil">
  					<option value="aluno">Aluno</option>
  					<option value="cantina">Cantina</option>
  					<option value="pais">Pais</option>
  				</select>
				
				<button type="submit" class="pure-button pure-button-primary">Enviar</button>
			</form>
		</main>
		<footer>
			<h5>Senac Lapa Tito - 2018</h5>
		</footer>
	</div>
	
</body>
</html>