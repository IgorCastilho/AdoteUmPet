<?php
session_start();
if ($_SESSION['status'] != 'LOGADOADM') {
    header("Location: administracao.php"); 
} else {
     $_SESSION['status'] != 'LOGADOADM';
}
?>



<html>
<head>

<title> Adote um pet - Publicação de notícias</title>
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
				<li ><a href="index.php" accesskey="1" title="">Página Inicial</a></li>  
                                <li class="active"><a href="painelusuario.php" accesskey="6" title="">Publicar notícias</a>
<li ><a href="paineladm.php" accesskey="1" title="">Voltar para o painel do administrador</a></li></li>
			</ul>
		</div>
	</div>
</div>

<div class="wrapper">
	
	<div id="welcome" class="container">
<div class="title">
<form name="signupnoticias" method="post" action="postarnoticia.php" enctype="multipart/form-data">

<p>


<body bgcolor="#EEE5DE" topmargin="30" leftmargin="200" rightmargin="200">

<tr>
<td>



<font face="Century Gothic">
<font color="#8B8682"> 
<font size="3"> 


<strong>
<p>
<div align="center">
<font size="6"> Publicação de notícias </font>
</p>
</div>
</strong>





    <b> Título da notícia:
<input name="titulo" type="text"  size="80" maxlenght="300" </input>
<p> </p> 

<b> Texto da notícia:
<textarea name="texto" rows="5" cols="30" maxlength="5000"></textarea>
<p> </p>





</form>





<div align="center">
<input type="submit" value="Confirmar">
<input type="submit" value="Cancela">
</div>
</form>



</body>
</html>
</meta>