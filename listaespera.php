<html>
<head>

<title> Adote um pet - Lista de espera</title>
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
				
                              <li class="active"><a href="listaespera.php" accesskey="6" title="">Preencher lista de espera</a></li>
                               <li ><a href="painelusuario.php" accesskey="1" title="">Voltar para o painel do usuário</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="wrapper">
	
	<div id="welcome" class="container">
<div class="title">

<form name="signup" action="preencherlistaespera.php" method="post" enctype="multipart/form-dada">
<p>


<body bgcolor="#EEE5DE" topmargin="30" leftmargin="0" rightmargin="0">








<font face="questrial">
<font color="#404040"> 



<strong>
<p>
<div align="center">
<h1> Preencher lista de espera </h1> </font>
</p>
</div>
</strong>



<table id="cadastroanimal_table" align="center">
			



			<tr>


    <td> Raça: </td>
<td><input   type="text" name="raca"  size="30" maxlenght="15" </input>  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
</td>

                         </tr>


                            <tr>

  <td> Idade mínima (anos): </td>
<td><input   type="text" name="idade"  size="30" maxlenght="10" pattern="[0-9]+$" </input>  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
</td>



                           </tr>

   <td>Tipo: </td>
<td><select name="tipo"  style="width: 243px>
      <option value=""> </option>
	<option value="cachorro">Cachorro</option>
	<option value="gato">Gato</option>
	<option value="papaguaio">Papaguaio</option>
	<option value="coelho">Coelho</option>	
	<option value="cobra">Cobra</option>
	<option value="tartaruga">Tartaruga</option>
	<option value="hamster">Hamster</option>
	<option value="Outro">Outro</option>
	</select></td>
	

                          
<p />
   <td> Sexo:  </td>
<td><select name="sexo"  style="width: 243px>
         <option value=""> </option>
	<option value="macho">Macho</option>
	<option value="femea">Fêmea</option>
	</select></td>

</table>
</form>

<p> </p>
<div align="center"> 
<input type="submit" name="enviei" value="Preencher">
<input type="reset" value="Limpar">
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
