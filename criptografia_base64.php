<?php 
$senha = "minha_senha"; 
$criptografada = base64_encode($senha); 
echo $criptografada; // Exibe: bXlwYXNzd29yZA==

//descriptografando
$senha_descripto= base64_decode($criptografada);
echo "<br><br>".$senha_descripto;
?>