<?php 
// Variável com a senha guardada 
$senha = "minha_senha"; 
$criptografada = crypt($senha); 
echo $criptografada; 

//crypt gera um novo hash cada vez que for executado o programa.
/*para utilizar uma senha criptografada
if(crypt($senhadigitada,$senhaguardada) == $senhaguardada) 
	echo "Login efetuado com sucesso"; */


?>