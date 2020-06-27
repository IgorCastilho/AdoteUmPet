<?php
session_start();
if ($_SESSION['status'] != 'LOGADO') {
    header("Location: login.php"); 
} else {
     $_SESSION['status'] != 'LOGADO';
}

?>



<?php
$host= "localhost";
$user= "root";
$pass = "root";
$banco = "adoteumpet";
$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($banco) or die (mysql_error());

?>



<html >
<head>

<title> Adote um pet - Painel do usuário</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>



<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
        	

<img align="center"  width="100px" height="100px" src="Imagens/pata.png"/>

			<h1><a href="http://adoteumpt.heliohost.org/">Adote um pet</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li><a href="index.php" accesskey="1" title="">Página Inicial</a></li>
				<li><a href="cadastrodeanimais.php" accesskey="2" title="">Cadastrar animal</a></li>
				<li><a href="doacaosuplementos.php" accesskey="3" title="">Doar suplementos</a></li>
				<li><a href="denuncia.php" accesskey="4" title="">Realizar denúncia</a></li>
				<li><a href="listaespera.php" accesskey="5" title="">Preencher lista de espera</a></li>
              

			</ul>
		</div>
	</div>
</div>

<div class="wrapper">
	
	<div id="welcome" class="container">



<div class="title">
	  <h2><h2> Olá, seja bem vindo(a) ao painel do usuário  </h2>
		</div>
		<p> 
<center><h3>Animais disponíveis para adoção</h3></center>
</p>
<p />
<?php
$sql= "SELECT * FROM Animais WHERE adotado = 0";
$resultado =mysql_query($sql, $conexao);

while($dados= mysql_fetch_array($resultado)){

$nomeanimal= $dados ['nome'];
$datanasc= $dados ['datanasc'];
$peso= $dados ['peso'];
$tipo= $dados ['tipo'];
$sexo= $dados ['sexo'];

echo "<p> <img width='400px' height='200px'   src='Imagens/animais.png' </img> <p />
<b>Nome do animal:</b> $nomeanimal <p />
<p> <b>Data de nascimento:</b> $datanasc</p>
<p> <b>Peso:</b>  $peso kg</p>
<p> <b>Tipo:</b>  $tipo</p>
<p> <b>Sexo:</b>  $sexo</p>
<a href='adotar.php' accesskey='5'>Adotar</a> </center>
 <hr align='center' size='1' width='500' color='#CDC5BF'>

";

}


?>

<p />


<input  type="button" onclick="location.href= 'meusanimais.php'"  value="Meus animais"> |
<input  type="button" onclick="location.href= 'logout.php'"  value="Sair">

<p />

	</div>
	
	
	</div>
</div>

<div id="copyright">
	<p>&copy; Adote um pet. Todos os direitos reservados. | Desenvolvedores: <strong> Paula Morandi </strong> e <strong> Igor Castilho </strong>.</p>

</div>
</body>
</html>































