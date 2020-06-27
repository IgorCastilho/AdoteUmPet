
<?php
session_start();

if ($_SESSION['status'] != 'LOGADO') {
    header("Location: login.php"); 
} else {
     $_SESSION['status'] != 'LOGADO';
}
$idusuario =  $_SESSION['iduser'];
?>

<html>


<head> 

<title>Cadastrando...</title>
<script type="text/javascript">
function naopreencheu(){
	setTimeout ("window.location='cadastrodeanimais.php'", 3000);
        alert("Preencha os dados corretamente");
}

function deucerto(){
	setTimeout ("window.location='painelusuario.php'", 3000);
        alert("Animal cadastrado com sucesso!");
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



$nome = $_POST['nome'];
$datanasc = $_POST['datanasc'];
$peso= $_POST['peso'];
$raca= $_POST['raca'];
$tipo= $_POST['tipo'];
$sexo= $_POST['sexo'];



if(empty($_POST['nome'])){
	echo "<center> Preencha todos os campos </center>";
        echo "<script> naopreencheu()  </script>";
}

else if(empty($_POST['sexo'])){
echo "<center> Preencha todos os campos </center>";
        echo "<script> naopreencheu()  </script>";
}

else if(empty($_POST['datanasc'])){
echo "<center> Preencha todos os campos </center>";
        echo "<script> naopreencheu()  </script>";
}

else if(empty($_POST['peso'])){
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
$sqlanimais= mysql_query("INSERT INTO animais (nome, datanasc, peso, raca, tipo, sexo, ID_Conta, adotado) VALUES('$nome', '$datanasc', '$peso', '$raca', '$tipo', '$sexo',  '$idusuario', 0)");

echo "<script> deucerto() </script>";
}

?>


</body>


</html>