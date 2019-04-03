<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="manifest" href="manifest.json">
	<link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
	<!-- pure -->
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<!--nosso css -->
	<link rel="stylesheet" type="text/css" href="Css/estilo.css">
	<title></title>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<meta name="google-signin-client_id" content="245289463236-l8e69av67bsmf4tgt086147oh4clfnl7.apps.googleusercontent.com">
</head>

<body>
	<div id="geral">
		<header>
			<h1>Cantina </h1>
		</header>
		<main>
			<form id="form" class="pure-form pure-form-stacked" action="login.php" method="post">
				<input type="text" name="usuario" class="pure-input-rounded" placeholder="Usuário"><br>
				<input type="password" name="senha" class="pure-input-rounded" placeholder="Senha"><br>
				<input type="submit" style="margin-left:30%;" class="pure-button pure-button-primary" value="Enviar"><br><br>
				<button style="margin-left:30%;" class="pure-button pure-button-primary"><a href="usuario.html">Cadastre-se</a></button>
				<div class="g-signin2" data-onsuccess="onSignIn"></div>
 
 <script type="text/javascript">
 	function onSignIn(googleUser) {
  		var profile = googleUser.getBasicProfile();
 		console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  		console.log('Name: ' + profile.getName());
  		console.log('Image URL: ' + profile.getImageUrl());
  		console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}
 </script>
		</form>

		</main>
		<footer>
			<h5>Senac Lapa Tito - 2018</h5>
		</footer>
	</div>
</body>
</html>