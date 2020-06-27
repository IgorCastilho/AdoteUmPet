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



<html>
<head>

<title> Adote um pet - Exibir dados</title>
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
                                <li class="active"><a href="painelusuario.php" accesskey="6" title="">Exibir dados</a></li>
 <li ><a href="paineladm.php" accesskey="1" title="">Voltar para o painel do administrador</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="wrapper">
	
	<div id="welcome" class="container">
<div class="title">


<center><h3>Usuários</h3></center>
<p> </p>
<?php
$sql= "SELECT * FROM conta";
$resultado =mysql_query($sql, $conexao);
while($dados= mysql_fetch_array($resultado)){

$nome= $dados ['nome'];
$cpf= $dados ['cpf'];
$estado= $dados ['estado'];
$cidade= $dados ['cidade'];
$CEP= $dados ['cep'];
$ddd= $dados ['ddd'];
$telefone= $dados ['telefone'];

?>

<p />
<center><table border="1">
	<tr>
		<th>Nome</th>
		<th> CPF</th>
		<th>Cidade</th>
               <th>Estado</th>
               <th>CEP</th>
<th>DDD</th>
<th>Telefone</th>
	</tr>
<tr>
<td> <?php echo "$nome"; ?> </td>
<td> <?php echo "$cpf"; ?> </td>
<td> <?php echo "$cidade"; ?> </td>
<td> <?php echo "$estado"; ?> </td>
<td> <?php echo "$CEP"; ?> </td>
<td> <?php echo "$ddd"; ?> </td>
<td> <?php echo "$telefone"; ?> </td>
</tr>
<?php } ?>
<p />
</table>

<p />
</center>
<hr align="center" size="1" width="500" color="#CDC5BF">

<p />
<center><h3>Denúncias</h3></center>
<?php
$sql= "SELECT * FROM denuncia";
$resultado2 =mysql_query($sql, $conexao);
while($dados2= mysql_fetch_array($resultado2)){

$descricao= $dados2 ['descricao'];
$estado= $dados2 ['estado'];
$cidade= $dados2 ['cidade'];
$bairro= $dados2 ['bairro'];
$rua= $dados2 ['rua'];
$tipo= $dados2 ['tipo'];

?>

<p />
<center><table border="1">
	<tr>
		<th>Descrição</th>
		<th> Estado</th>
		<th>Cidade</th>
               <th>Bairro</th>
               <th>Rua</th>
 <th>Tipo</th>

	</tr>
<tr>
<td> <?php echo "$descricao"; ?> </td>
<td> <?php echo "$estado"; ?> </td>
<td> <?php echo "$cidade"; ?> </td>
<td> <?php echo "$bairro"; ?> </td>
<td> <?php echo "$rua"; ?> </td>
<td> <?php echo "$tipo"; ?> </td>

</tr>
<?php } ?>

</table>

<hr align="center" size="1" width="500" color="#CDC5BF">
</div>
	

<center><h3>Doação de suplementos</h3></center>
<?php
$sql= "SELECT * FROM doacaosuplementos";
$resultado3 =mysql_query($sql, $conexao);
while($dados3= mysql_fetch_array($resultado3)){

$tipo= $dados3 ['tipo'];
$nome= $dados3 ['nome'];

$quantidade= $dados3 ['quantidade'];
$unidade= $dados3 ['unidade'];


?>

<p />
<center><table border="1">
	<tr>
		<th>Tipo</th>
		<th> Nome</th>

               <th>Quantidade</th>
               <th>Unidade</th>


	</tr>
<tr>
<td> <?php echo "$tipo"; ?> </td>
<td> <?php echo "$nome"; ?> </td>

<td> <?php echo "$quantidade"; ?> </td>
<td> <?php echo "$unidade"; ?> </td>


</tr>
<?php } ?>
<p />
</table>
<p />
<hr align="center" size="1" width="500" color="#CDC5BF">
</div>


<center><h3>Lista de espera</h3></center>
<?php
$sql= "SELECT * FROM listaespera";
$resultado4 =mysql_query($sql, $conexao);
while($dados4= mysql_fetch_array($resultado4)){

$raca= $dados4 ['raca'];
$tipo= $dados4 ['tipo'];
$sexo= $dados4 ['sexo'];
$idade= $dados4 ['idademinima'];



?>

<p />
<center><table border="1">
	<tr>
		<th>Raça</th>
		<th> Tipo</th>
		<th>Sexo</th>
               <th>Idade</th>
   


	</tr>
<tr>
<td> <?php echo "$raca"; ?> </td>
<td> <?php echo "$tipo"; ?> </td>
<td> <?php echo "$sexo"; ?> </td>
<td> <?php echo "$idade"; ?> </td>



</tr>
<?php } ?>
<p />
</table>
<p />
<hr align="center" size="1" width="500" color="#CDC5BF">
</div>







	
	</div>
</div>








</body>
<div id="copyright">
	<p>&copy; Adote um pet. Todos os direitos reservados. | Desenvolvedores: <strong> Paula Morandi </strong> e <strong> Igor Castilho </strong>.</p>

</div>
</html>
</meta>