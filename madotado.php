﻿<?php
session_start();

if ($_SESSION['status'] != 'LOGADO') {
    header("Location: login.php"); 
} else {
     $_SESSION['status'] != 'LOGADO';
}
$idan =  $_GET['idan'];

$host= "localhost";
$user= "root";
$pass = "root";
$banco = "adoteumpet";
$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($banco) or die (mysql_error());

?>


<html>


<head> 

<title>Marcando como adotado...</title>

<script type="text/javascript">

function deucerto(){
        alert("O animal foi marcado como adotado com sucesso");
	setTimeout ("window.location='meusanimais.php'", 1500);
}
</script>


</head>

<body>




<?php

$sql = mysql_query("UPDATE Animais SET adotado = 1 WHERE idanimal = '$idan'");

echo "<script> deucerto() </script>";


?>



</body>

</html>    






























