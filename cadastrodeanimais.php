<?php
session_start();

if ($_SESSION['status'] != 'LOGADO') {
    header("Location: login.php"); 
} else {
     $_SESSION['status'] != 'LOGADO';
}

?>




﻿<html>
<head>

<title> Adote um pet - Cadastro de animais</title>
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
        	

<img align="center"  width="100px" height="100px" src="http://nayaespecialidades.com/wp-content/uploads/2013/10/pata.png"/>

			<h1><a href="index.php">Adote um pet</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li ><a href="index.php" accesskey="1" title="">Página Inicial</a></li>
				
                              <li class="active"><a href="cadastrodeanimais.php" accesskey="6" title="">Cadastrar animal</a></li>
                               <li ><a href="painelusuario.php" accesskey="1" title="">Voltar para o painel do usuário</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="wrapper">
	
	<div id="welcome" class="container">
<div class="title">

<form name="signup" action="cadastraranimal.php" method="post" enctype="multipart/form-dada">
<p>


<body bgcolor="#EEE5DE" topmargin="30" leftmargin="0" rightmargin="0">








<font face="questrial">
<font color="#404040"> 



<strong>
<p>
<div align="center">
<h1> Cadastrar animal </h1> </font>
</p>
</div>
</strong>



<table id="cadastroanimal_table" align="center">
			



			<tr>


    <td> Nome: </td>
<td><input   type="text" name="nome"  size="30" maxlenght="100" </input>  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
</td>

&nbsp  &nbsp &nbsp   <td> Peso: </td>
<td><input  type="number" name="peso"   size="30" maxlenght="100" pattern="[0-9]+$"</input>  </td>
                         </tr>


                            <tr>

  <td> Data de nasc.: </td>
<td><input  id="campodata" type="text" name="datanasc"  size="30"  </input>  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
</td>



  &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp    <td> Raça: </td>
 <td><input  type="text" name="raca"   size="30" maxlenght="100"> </input> &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp 
</td>
                           </tr>



                           <tr>

   <td>Tipo: </td>
<td><select name="tipo"  style="width: 243px>
      <option value=""> </option>
	<option value="Cachorro">Cachorro</option>
	<option value="Gato">Gato</option>
	<option value="Papaguaio">Papaguaio</option>
	<option value="Coelho">Coelho</option>	
	<option value="Cobra">Cobra</option>
	<option value="Tartaruga">Tartaruga</option>
	<option value="Hamster">Hamster</option>
	<option value="Outro">Outro</option>
	</select></td>
	

                          

    <td>  Sexo: </td>
<td><select name="sexo"  style="width: 243px>
       <option value=""> </option>
	<option value="Macho">Macho</option>
	<option value="Femea">Fêmea</option>
	</select></td>
</tr>

</table>
</form>

<p> </p>
<div align="center"> 
<input type="submit" name="enviei" value="Confirmar">
<input type="reset" value="Cancelar">
</div>
</form>
<p> </p>

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
