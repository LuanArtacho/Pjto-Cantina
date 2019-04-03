<?php
	header("Content-Type:text/html,charset=utf-8");
	session_start();

	if (isset($_POST['usuario']) &&
		isset($_POST['senha'])) {
		$usuario=$_POST['usuario'];
		$senha=$_POST['senha'];
		//utilizando a senha criptografada
		
		$sql ="SELECT * FROM usuario WHERE usuario='$usuario' AND senha=md5('$senha')";
		include "conexao.php";
		$resultado = mysqli_query ($conn,$sql);
		if ($linha = mysqli_fetch_array($resultado)){
				$_SESSION['usuario']=$usuario;
				$_SESSION['id']=$linha['id'];
				$_SESSION['email']=$linha['email'];

				
				if ($linha['perfil']=='aluno') {
					echo('<script>window.location.href="principal.php";</script>');}	
				if ($linha['perfil']=='pais') {
					echo('<script>window.location.href="aluno.php";</script>');}	
				
				if ($linha['perfil']=='cantina') {
					echo('<script>window.location.href="cantina.php";</script>');}	
			}
		 	    
    			else  {
    			echo('<script> alert("Falhou!!!"); window.location.href="index.php";</script>');}  
    	}
    	
?>