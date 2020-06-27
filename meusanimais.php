<?php
session_start();

if ($_SESSION['status'] != 'LOGADO') {
    header("Location: login.php"); 
} else {
     $_SESSION['status'] != 'LOGADO';
}
$idusuario =  $_SESSION['iduser']
?>

<?php
$host= "localhost";
$user= "root";
$pass = "root";
$banco = "adoteumpet";
$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($banco) or die (mysql_error());

?>


﻿<html>
<head>

<title> Adote um pet - Ver meus animais</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/validade.js"> </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"> </script>


<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>



<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
        	

<img align="center"  width="100px" height="100px" src="Imagens/pata.png"/>

			<h1><a href="index.php">Adote um pet</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li ><a href="index.php" accesskey="1" title="">Página Inicial</a></li>
				
                              <li class="active"><a href="meusanimais.php" accesskey="6" title="">Meus animais</a></li>
                               <li ><a href="painelusuario.php" accesskey="1" title="">Voltar para o painel do usuário</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="wrapper">
	
	<div id="welcome" class="container">
<div class="title">

<center><h3>Seus animais</h3></center>
</p>
<p />
<?php
$sql= "SELECT * FROM Animais WHERE ID_Conta = '$idusuario'";
$resultado =mysql_query($sql, $conexao);

while($dados= mysql_fetch_array($resultado)){

$idanimal = $dados ['idanimal'];
$nomeanimal= $dados ['nome'];
$datanasc= $dados ['datanasc'];
$peso= $dados ['peso'];
$tipo= $dados ['tipo'];
$sexo= $dados ['sexo'];

echo "<p> <img width='400px' height='200px'   src='Imagens/animais.png' </img> <p />
<b>Nome do animal:</b> $nomeanimal <p />
<p> <b>Data de nascimento:</b> $datanasc</p>
<p> <b>Peso:</b>  $peso </p>
<p> <b>Tipo:</b>  $tipo</p>
<p> <b>Sexo:</b>  $sexo</p>
<a href='madotado.php?idan=$idanimal'  >Marcar como adotado</a> |
<a href='apagaranimal.php?idan=$idanimal'  >Excluir animal</a>
 <hr align='center' size='1' width='500' color='#CDC5BF'>

";

}


?>

<p />


</div>
</div>
</div>

<footer>

<div id="copyright">
	<font face="Questrial"><p>&copy; Adote um pet. Todos os direitos reservados. | Desenvolvedores: <strong> Paula Morandi </strong> e <strong> Igor Castilho </strong>.</p> </font>

</div>

</footer>

</body>
</html>
