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
<title> Adote um pet - Adoção</title>
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
				<li ><a href="http://adoteumpt.heliohost.org/" accesskey="1" title="">Página Inicial</a></li>
				
                              <li class="active"><a href="http://adoteumpt.heliohost.org/adotar.php" accesskey="6" title="">Adotar</a></li>
                               <li ><a href="http://adoteumpt.heliohost.org/painelusuario.php" accesskey="1" title="">Voltar para o painel do usuário</a></li>

			</ul>
		</div>
	</div>
</div>

<?php
$sql = mysql_query("SELECT * FROM Animais, conta WHERE ID_Conta = idconta ") or die (mysql_error());
$row = mysql_fetch_array($sql);
$total = mysql_num_rows($sql);

if($total > 0){

		$ddd = $row['ddd'];
        $telefone = $row['telefone'];

       
       
	
	
}


?>







<div class="wrapper">
	
	<div id="welcome" class="container">
    	
<div class="title">
	  <h2>Agradeçemos sua adoção!</h2>
		</div>
		<p> 
<center><h4> Ainda não oferecemos sistema de adoção, portanto, você deve entrar em contato com o dono do animal através do telefone (<?php echo "$ddd" ?>) <?php echo "$telefone" ?> e combinar como será feita a adoção. Em caso de problemas, entre em contato com a nossa equipe através do e-mail: administracao@adoteumpt.heliohost.org </h4> </center> 

</p>
	</div>
	
	
	</div>
</div>

<div id="copyright">
	<p>&copy; Adote um pet. Todos os direitos reservados. | Desenvolvedores: <strong> Paula Morandi </strong> e <strong> Igor Castilho </strong>.</p>

</div>
</body>
</html>































