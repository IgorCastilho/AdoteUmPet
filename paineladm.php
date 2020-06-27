<?php
session_start();
if ($_SESSION['status'] != 'LOGADOADM') {
    header("Location: administracao.php"); 
} else {
     $_SESSION['status'] != 'LOGADOADM';
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

<title> Adote um pet - Painel do administrador</title>
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
        	

<img align="center"  width="100px" height="100px" src="http://nayaespecialidades.com/wp-content/uploads/2013/10/pata.png"/>

			<h1><a href="index.php">Adote um pet</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li><a href="index.php" accesskey="1" title="">Página Inicial</a></li>
				<li><a href="publicacaonoticias.php" accesskey="2" title="">Publicar notícias</a></li>
				<li><a href="exibir.php" accesskey="3" title="">Exibir dados</a></li>

				
              

			</ul>
		</div>
	</div>
</div>

<div class="wrapper">
	
	<div id="welcome" class="container">



<div class="title">
	  <h2><h2> Olá, seja bem vindo(a) ao painel do administrador</h2>
		</div>
		<p> 
<center><h4>Por favor, escolha acima o que você deseja.</h4></center>
</p>
<input  type="button" onclick="location.href= 'logoutadm.php'"  value="Sair">

<p />

	</div>
	
	
	</div>
</div>

<div id="copyright">
	<p>&copy; Adote um pet. Todos os direitos reservados. | Desenvolvedores: <strong> Paula Morandi </strong> e <strong> Igor Castilho </strong>.</p>

</div>
</body>
</html>































