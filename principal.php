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
	<link rel="stylesheet" type="text/css" href="Css/estilo.css">
	<title></title>
</head>

<body>
	<div id="geral">
		<header>
			<h1>Cantina </h1>
			<p><?php echo $_SESSION['usuario']; ?></p>
			<p><?php echo "Id: ".$_SESSION['id']; ?></p>
		</header>
		<main>
			<?php
			//vamos ler (select * from...) a tabela de alunos através do id do aluno para descobrir o quanto de dinheiro ele pode gastar por dia e quanto ele tem de saldo.
			
			$sql ="SELECT saldo_dia, saldo_total FROM alunos WHERE id_aluno =".$_SESSION['id'];
			include "conexao.php";
			//executando o sql 
			$resultado = mysqli_query($conn,$sql);
			//verificando se encontrou algum registro
						
			if ($linha=mysqli_fetch_array($resultado)) {

				$saldo_dia = number_format($linha['saldo_dia'],2,",",".");
				$saldo_total =number_format($linha['saldo_total'],2,",",".");
				echo "<br><br><h2>Saldo para o dia: R$ $saldo_dia</h2><br>";
				echo "<h2>Saldo restante: R$ $saldo_total</h2>"; 
//vamos mostrar uma tabela em html
				?>
				<br>
				<form>
				<table border="1">	
					<tr>
						<th>Produto</th>
						<th>Valor</th>
						<th>Comprar</th>
					</tr>
					<tr>
						<td>Lanche</td>
						<td><input type="button" id="valor1" value ="5"></td>
						<td><input type="button" id="Item1" onclick="trocarTexto('Item1','valor1')" value="Não quero"></td>
					</tr>
					<tr>
						<td>Bebida</td>
						<td id="valor2">2</td>
						<td><input type="button" id="Item2" onclick="trocarTexto('Item2','valor2')" value="Não quero"></td>
					</tr>						
					<tr>
						<td>Doce</td>
						<td id="valor3">1</td>
						<td><input type="button" id="Item3" onclick="trocarTexto('Item3','valor3')" value="Não quero"></td>
					</tr>							
				</table>
				<input type="submit" value="Comprar">
				</form>
<?php

			}

			?>

		<script type="text/javascript">
			function trocarTexto(el,valor) {
				var texto = document.getElementById(el).value;
				alert (texto);
				var valor = document.getElementById(valor).value;
				alert (valor);
				if (texto=='Eu quero') {
					document.getElementById(el).value = 'Não quero';}
				if (texto=='Não quero') {
					document.getElementById(el).value = 'Eu quero';}
				}
		
				
		</script>


		</main>
		<footer>
			<h5>Senac Lapa Tito - 2018</h5>
		</footer>
	</div>
</body>
</html>