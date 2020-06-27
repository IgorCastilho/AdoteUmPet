<html>


<head> 

<title>Denunciando...</title>

<script type="text/javascript">
function naopreencheu(){
        alert("Preencha todos os campos corretamente");
	setTimeout ("window.location='denuncia.php'", 1500);
}

function deucerto(){
        alert("Denúncia realizada com sucesso, você será redirecionado para o painel do usuário");
	setTimeout ("window.location='painelusuario.php'", 1500);
}
</script>
<?php
$host= "localhost";
$user= "root";
$pass = "root";
$banco = "adoteumpet";
$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($banco) or die (mysql_error());

?>

</head>

<body>




<?php


$descricao= $_POST['texto'];
$estado =$_POST['estado'];
$cidade =$_POST['cidade'];
$rua =$_POST['rua'];
$tipo =$_POST['tipo'];
$bairro=$_POST['bairro'];




if(empty($_POST['texto'])){
	
        echo "<script> naopreencheu()  </script>";
}

else if(empty($_POST['estado'])){

        echo "<script> naopreencheu()  </script>";
}

else if(empty($_POST['cidade'])){

        echo "<script> naopreencheu()  </script>";
}
else if(empty($_POST['rua'])){

        echo "<script> naopreencheu()  </script>";
}
else if(empty($_POST['tipo'])){

        echo "<script> naopreencheu()  </script>";
}
else if(empty($_POST['bairro'])){

        echo "<script> naopreencheu()  </script>";
}


else{
$sql= mysql_query("INSERT INTO denuncia(descricao, estado, cidade, rua, tipo, bairro) VALUES('$descricao', '$estado', '$cidade', '$rua', '$tipo', '$bairro')");

echo "<script> deucerto() </script>";
}

?>



</body>

</html>