<?php
$host= "localhost";
$user= "root";
$pass = "root";
$banco = "adoteumpet";
$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($banco) or die (mysql_error());

?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Adote um pet - Página inicial</title>
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
				<li  class="active"><a href="index.php" accesskey="1" title="">Página Inicial</a></li>
				<li><a href="login.php" accesskey="2" title="">Login</a></li>
				<li><a href="cadastrodecontas.php" accesskey="3" title="">Cadastre-se</a></li>
				<li><a href="atendimento.php" accesskey="5" title="">Atendimento</a></li>
                                 <li><a href="sobre.php" accesskey="4" title="">Sobre</a></li>
<li><a href="administracao.php" accesskey="6" title="">Administração</a></li>
                                

			</ul>
		</div>
	</div>
</div>

<div class="wrapper">
	
	<div id="welcome" class="container">
    	
<div class="title">
	  <h1>Portal de notícias</h1>
<p></p>
		</div>
		<?php
$sql= "SELECT titulo, texto, date_format(data,'%d/%m/%Y') AS 'date'  FROM noticias";

$resultado =mysql_query($sql, $conexao);



while($dados= mysql_fetch_array($resultado)){

$titulo = $dados ['titulo'];
$texto = $dados ['texto'];
$data = $dados ['date'];




echo " <strong> <font size='5'>   $titulo </strong>  </font> </p>
<p><font size='4'> $texto </font> </p>
 <strong><font size='2'>Data de postagem: </strong> </font> $data  
 
";


echo "<p> <img  width='300px' height='300px'  src='Imagens/pata.png' </img> </p>
<hr align='center' size='1' width='500' color='#CDC5BF'>
</p> ";

}




?></p>
	</div>
	
	
	</div>
</div>

<div id="copyright">
	<p>&copy; Adote um pet. Todos os direitos reservados. | Desenvolvedores: <strong> Igor Castilho </strong> e <strong> Paula Morandi </strong>.</p>

</div>
</body>
</html>































