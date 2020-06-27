

<html>


<head> 

<title>Doando...</title>

<script type="text/javascript">
function naopreencheu(){
	setTimeout ("window.location='doacaosuplementos.php'", 3000);
        alert("Preencha os dados corretamente");
}

function deucerto(){
	setTimeout ("window.location='doacaorealizada.php'", 3000);
        alert("Doação feita com sucesso!");
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



$tipo=$_POST['tipo'];
$nome=$_POST['nome'];

$quantidade= $_POST['qtd'];
$unidade= $_POST['unidade'];


if(empty($_POST['tipo'])){
	
        echo "<script> naopreencheu()  </script>";
}

else if(empty($_POST['nome'])){

        echo "<script> naopreencheu()  </script>";
}


else if(empty($_POST['qtd'])){

        echo "<script> naopreencheu()  </script>";
}

else if(empty($_POST['unidade'])){

        echo "<script> naopreencheu()  </script>";
}





else{


$sql= mysql_query("INSERT INTO doacaosuplementos (tipo, nome, quantidade, unidade) VALUES('$tipo', '$nome', '$quantidade', '$unidade')");

echo "<script> deucerto() </script>";
}
?>


</body>


</html>