﻿<?php
session_start();

if ($_SESSION['status'] != 'LOGADO') {
    header("Location: login.php"); 
} else {
     $_SESSION['status'] != 'LOGADO';
}
$idn =  $_GET['idn'];


$host= "localhost";
$user= "root";
$pass = "root";
$banco = "adoteumpet";
$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($banco) or die (mysql_error());



?>


<html>


<head> 

<title>Apagando noticia...</title>

<script type="text/javascript">

function deucerto(){
        alert("A noticia foi apagada com sucesso");
	setTimeout ("window.location='gerenciarnoticias.php'", 1500);
}


</script>


</head>

<body>




<?php

$sql = mysql_query("DELETE FROM noticias WHERE id= '$idn'");

echo "<script> deucerto() </script>";


?>



</body>

</html>    






























