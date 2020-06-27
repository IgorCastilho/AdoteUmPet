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
        alert("Login realizado com sucesso, você será redirecionado para o painel do usuário!");
	setTimeout ("window.location='painelusuario.php'", 1500);
}


function loginfailed(){
        alert("E-mail ou senha incorretos. Por favor, verifique os dados e tente novamente");
	setTimeout("window.location='login.php'", 1500)



}
</script>
</head>

<body>


<?php

$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = mysql_query("SELECT * FROM conta WHERE email= '$email' and senha = '$senha'") or die (mysql_error());
$row = mysql_fetch_array($sql);
$total = mysql_num_rows($sql);

if($total > 0){

	$_SESSION['email'] = $_POST['email'];
	$_SESSION['senha'] = $_POST['senha'];
        $_SESSION['status'] = 'LOGADO';
        $_SESSION['iduser'] = $row['idconta'];

       
       
	
	echo "<script> loginsuccessfully()  </script>";
}
else{
session_destroy();
unset ($_SESSION['login']);
unset ($_SESSION['senha']);
	echo "<script> loginfailed() </script>";
}


?>


</body>
</hmtl>











