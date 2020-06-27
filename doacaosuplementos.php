<?php
session_start();
if ($_SESSION['status'] != 'LOGADO') {
    header("Location: login.php"); 
} else {
     $_SESSION['status'] != 'LOGADO';
}

?>
<html>
<head>

<title> Adote um pet - Doação de suplementos</title>
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

			<h1><a href="http://adoteumpt.heliohost.org/">Adote um pet</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li ><a href="index.php" accesskey="1" title="">Página Inicial</a></li>
				
                              <li class="active"><a href="doacaosuplementos.php" accesskey="6" title="">Doar suplementos</a></li>
                               <li ><a href="painelusuario.php" accesskey="1" title="">Voltar para o painel do usuário</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="wrapper">
	
	<div id="welcome" class="container">
<div class="title">

<form name="signup" action="doar.php" method="post" enctype="multipart/form-dada">
<p>


<body bgcolor="#EEE5DE" topmargin="30" leftmargin="0" rightmargin="0">







<font face="questrial">
<font color="#404040"> 

 


<strong>
<p>
<div align="center">
<h1> Faça sua doação de suplementos </h1> </font>
</p>
</div>
</strong>


		<table id="doacaosuplemento_table" align="center">
			


<tr>
 <td> Tipo do suplemento: </td>
 <td><select name="tipo" style="width: 242px"> 
       
	<option value="">Selecione o tipo</option>
	<option value="remedio">Remédio</option>
	<option value="racao">Ração</option>
	<option value="dinheiro">Dinheiro</option>
	<option value="acessorios">Acessórios</option>	
	<option value="outro">Outro</option>
	</select> </td>




<td>Nome:</td>
<td><input   type="text" name="nome"  size="30" maxlenght="60"></input>  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp </td>
</tr>


<tr>
<td>Quantidade:</td>
<td><input   type="text" name="qtd"  size="30" maxlenght="60" pattern="[0-9]+$"></input>  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp </td>




<td> Unidade: </td>
<td> <select name="unidade"  style="width: 242px" >
	<option value=""> </option>
	<option value="caixa">Caixa</option>
	<option value="pacote">Pacote</option>
	<option value="reais">Reais</option>
	<option value="unitario">Item unitário</option>	
	</select> </td>
 </tr>



</table>


<p> </p>
<div align="center"> 
<input type="submit" name="enviei" value="Confirmar">
<input type="reset" value="Cancelar">
</div>
</form>
<p> </p>



<footer>
</div>
</div>
</div>
<div id="copyright">
	<font face="Questrial"><p>&copy; Adote um pet. Todos os direitos reservados. | Desenvolvedores: <strong> Paula Morandi </strong> e <strong> Igor Castilho </strong>.</p> </font>

</div>

</footer>

</body>
</html>
