
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;" />
<title> Adote um pet - Realizar denúncia</title>
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

			<h1><a href="index.php">Adote um pet</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li ><a href="index.php" accesskey="1" title="">Página Inicial</a></li>
				
                              <li class="active"><a href="denuncia.php" accesskey="6" title="">Realizar denúncia</a></li>
                               <li ><a href="painelusuario.php" accesskey="1" title="">Voltar para o painel do usuário</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="wrapper">
	
	<div id="welcome" class="container">
<div class="title">
<div id="cadastroconta">
<form name="denuncia" method="post" action="fazerdenuncia.php" enctype="multipart/form-data">
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
<font size="6"> Denúncia </font>
</p>
</div>
</strong>





<b> Descrição:
<textarea name="texto" rows="5" cols="30" maxlength="700" id="texto"></textarea>
<p> </p>

<table id="denuncia_table" align="center">



<tr>

<td>Estado:</td>
				<td><select name="estado" id="estado" style="width: 207px">
        <option value=" "> </option>
	<option value="AC">Acre</option>
	<option value="AL">Alagoas</option>
	<option value="AP">Amapá</option>
	<option value="AM">Amazonas</option>
	<option value="BA">Bahia</option>
	<option value="CE">Ceará</option>
	<option value="DF">Distrito Federal</option>
	<option value="ES">Espirito Santo</option>
	<option value="GO">Goiás</option>
	<option value="MA">Maranhão</option>
	<option value="MS">Mato Grosso do Sul</option>
	<option value="MT">Mato Grosso</option>
	<option value="MG">Minas Gerais</option>
	<option value="PA">Pará</option>
	<option value="PB">Paraíba</option>
	<option value="PR">Paraná</option>
	<option value="PE">Pernambuco</option>
	<option value="PI">Piauí</option>
	<option value="RJ">Rio de Janeiro</option>
	<option value="RN">Rio Grande do Norte</option>
	<option value="RS">Rio Grande do Sul</option>
	<option value="RO">Rondônia</option>
	<option value="RR">Roraima</option>
	<option value="SC">Santa Catarina</option>
	<option value="SP">São Paulo</option>
	<option value="SE">Sergipe</option>
	<option value="TO">Tocantins</option>
</select></td>

<td>Cidade:</td>
<td><input type="text" name="cidade" id="cidade" class="txt" size="30" maxlenght="15" ></input> &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp</td>
</tr>

<tr>
	
<td>Bairro:</td>			
<td><input  name="bairro" type="text"  size="29" maxlenght="15" </input>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>

  <td>Rua:</td>
<td><input  name="rua" type="text"  size="30" maxlenght="15" </input> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>

<td>Tipo:</td>
				<td><select name="tipo" id="tipo" style="width: 207px">
        <option value=""> </option>
	<option value="maustratos">Maus tratos</option>
	<option value="animalabandonado" >Animal abandonado</option>

</select></td>


</tr>
</table>


<p />

<div align="center">
<input type="submit" value="Denunciar">
<input type="submit" value="Limpar">
</div>
</form>


</body>
</html>