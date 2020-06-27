<?php

session_start();

?>


﻿<?php
$host= "localhost";
$user= "root";
$pass = "root";
$banco = "adoteumpet";
$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($banco) or die (mysql_error());

?>




<html>

<head>

<title> Logando... </title>
<script type="text/javascript">
function loginsuccessfully(){
        alert("Login realizado com sucesso, você será redirecionado para o painel do administrador!");
	setTimeout ("window.location='paineladm.php'", 1500);
}


function loginfailed(){
        alert("Senha incorreta. Por favor, verifique e tente novamente");
	setTimeout("window.location='administracao.php'", 1500)



}
</script>
</head>

<body>


<?php


$senha = $_POST['senha'];
$sql = mysql_query("SELECT * FROM administracao WHERE senha = '$senha'") or die (mysql_error());

$row = mysql_num_rows($sql);

if($row > 0){

	
	$_SESSION['senha'] = $_POST['senha'];
        $_SESSION['status'] = 'LOGADOADM';
       
       
	
	echo "<script> loginsuccessfully()  </script>";
}
else{
session_destroy();

unset ($_SESSION['senha']);
	echo "<script> loginfailed() </script>";
}


?>


</body>
</hmtl>











