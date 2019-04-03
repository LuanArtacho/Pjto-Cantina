<?php 
// Variável com a senha guardada 
$senha= "minha_senha"; 
$criptografada = md5($senha); 
echo $criptografada; 

/*descriptografar
vantagem: não consigo descriptografar
hash*/

/*caso eu tenha que verificar a senha armazenada.
if($senhadigitada == md5($senhaguardada)) 
	echo "Login efetuado com sucesso"; */
	

?>