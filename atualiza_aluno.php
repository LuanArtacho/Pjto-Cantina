<?php
	header("Content-Type:text/html,charset=utf-8");
	session_start();
	include "conexao.php";
	if (isset($_POST['usuario']) &&
		isset($_POST['senha'])) {
		$_SESSION['usuario']=$_POST['usuario'];
		$usuario=$_POST['usuario'];
		$_SESSION['senha']=$_POST['senha'];
		$senhaCripto=md5($_POST['senha']);
		//cria uma string com 32 caracteres
		$perfil = "aluno";
		$email = $_SESSION['email'];
		$sql ="INSERT INTO usuario (usuario, email, senha ,perfil) VALUES ('$usuario','$email','$senhaCripto','$perfil') ";
		$resultado = mysqli_query ($conn,$sql);
		//vamos descobrir qual foi o id que foi criado com este insert
		$sql = "SELECT id FROM usuario ORDER BY id DESC";
		$resultado = mysqli_query ($conn,$sql);
		if ($linha = mysqli_fetch_array($resultado)){
			$idAluno=$linha['id'];
			$id_responsavel = $_SESSION['id'];
			//echo ("<p>$idAluno</p>");
			if (isset($_POST['aluno']) &&
				isset($_POST['responsavel']) &&
				isset($_POST['emailResponsavel']) &&
				isset($_POST['saldoDia']) && 
				isset($_POST['total'])) {
				$aluno =$_POST['aluno'];
				$responsavel = $_POST['responsavel'];
				$emailResponsavel = $_POST['emailResponsavel'];
				//fazer casting = qual é o tipo a ser considerado
				// centavo é um ponto
				//$saldoDia=(float)(str_replace($_POST['saldoDia'],",","."));
				//mesma função da linha anterior um pouco mais detalhado
				$saldoDia=$_POST['saldoDia'];
				$saldoDia=str_replace(",",".",$saldoDia);
				$saldoDia = (float)$saldoDia;

				$total = (float) str_replace(",",".",$_POST['total']);
				
				$sql ="INSERT INTO alunos (id_aluno, nome,responsavel, email_responsavel,saldo_dia ,saldo_total, id_responsavel) VALUES ($idAluno, '$aluno','$responsavel','$emailResponsavel', $saldoDia, $total,$id_responsavel ) ";

				$resultado = mysqli_query ($conn,$sql);
				//verificando se deu certo.....
		    	if ($resultado==TRUE) {
			    	echo('<script> alert("Sucesso!"); window.location.href="login.php";</script>');}
		    	else {
		    		echo $sql;
		    		echo('<script> alert("Falha!"); window.location.href="#";</script>');
		    	}
		    }
    	}		
    }		
			?>