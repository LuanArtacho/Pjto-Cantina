<?php
	header("Content-Type:text/html,charset=utf-8");
	session_start();
	if (isset($_POST['usuario']) &&
		isset($_POST['senha']) &&
		isset($_POST['email'])) {
		$usuario=$_POST['usuario'];
		$email=$_POST['email'];
		//criptografando a senha
		$senhaCripto=md5($_POST['senha']);
		//cria uma string com 32 caracteres
		$perfil = $_POST['perfil'];
		
		$sql ="INSERT INTO usuario (usuario, email, senha ,perfil) VALUES ('$usuario','$email','$senhaCripto','$perfil') ";
		include "conexao.php";
		$resultado = mysqli_query ($conn,$sql);
		//verificando se deu certo.....
    	if ($resultado==TRUE) {
	    	echo('<script> alert("Sucesso!"); window.location.href="index.php";</script>');}
    	else {
    		echo('<script> alert("Falha!"); window.location.href="usuario.html";</script>');
    	}
    }			
			?>