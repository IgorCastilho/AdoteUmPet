<html>


<head> 

<title>Postando...</title>

<script type="text/javascript">
function naopreencheu(){
        alert("Preencha todos os campos corretamente");
	setTimeout ("window.location='publicacaonoticias.php'", 1500);
}

function deucerto(){
        alert("Notícia postada, você será redirecionado para a página inicial");
	setTimeout ("window.location='index.php'", 1500);
}
</script>


</head>

<body>
<?php
$host= "localhost";
$user= "root";
$pass = "root";
$banco = "adoteumpet";
$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($banco) or die (mysql_error());

?>



<?php


$titulo=$_POST['titulo'];
$texto=$_POST['texto'];






if(empty($_POST['titulo'])){
	
        echo "<script> naopreencheu()  </script>";
}

else if(empty($_POST['texto'])){

        echo "<script> naopreencheu()  </script>";
}



else{



$sql= mysql_query("INSERT INTO noticias (titulo, texto, data) VALUES('$titulo', '$texto', now())");


echo "<script> deucerto() </script>";
}

?>



</body>

</html>