



<html>


<head> 
﻿﻿<?php

session_start();

$idusuario =  $_SESSION['iduser'];
?>
<title>Preenchendo...</title>
<script type="text/javascript">
function naopreencheu(){
	setTimeout ("window.location='listaespera.php'", 3000);
        alert("Preencha os dados corretamente");
}

function deucerto(){
	setTimeout ("window.location='painelusuario.php'", 3000);
        alert("Lista de espera preenchida com sucesso!");
}
</script>

</head>

<body>

<?php
$host= "localhost";
$user= "root";
$pass = "root";
$banco = "adoteumpet";
$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($banco) or die (mysql_error());

?>



<?php



$raca= $_POST['raca'];
$tipo= $_POST['tipo'];
$idade= $_POST['idade'];
$sexo= $_POST['sexo'];



if(empty($_POST['idade'])){
	echo "<center> Preencha todos os campos </center>";
        echo "<script> naopreencheu()  </script>";
}

else if(empty($_POST['sexo'])){
echo "<center> Preencha todos os campos </center>";
        echo "<script> naopreencheu()  </script>";
}



else if(empty($_POST['raca'])){
echo "<center> Preencha todos os campos </center>";
        echo "<script> naopreencheu()  </script>";
}

else if(empty($_POST['tipo'])){
echo "<center> Preencha todos os campos </center>";
        echo "<script> naopreencheu()  </script>";
}


else{
$sql= mysql_query("INSERT INTO listaespera (raca, tipo, sexo, idademinima, ID_Conta) VALUES('$raca', '$tipo', '$sexo', '$idade', '$idusuario')");

echo "<script> deucerto() </script>";
}

?>


</body>


</html>