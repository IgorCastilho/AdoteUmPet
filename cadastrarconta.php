<html>


<head> 

<title>Cadastrando...</title>
<script type="text/javascript">
function naopreencheu(){
        alert("Preencha todos os campos corretamente");
	setTimeout ("window.location='cadastrodecontas.php'", 1500);
}

function deucerto(){
        alert("Cadastro efetuado, já pode fazer login!");
	setTimeout ("window.location='login.php'", 1500);
}
</script>

</head>

<?php
$host= "localhost";
$user= "root";
$pass = "root";
$banco = "adoteumpet";
$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($banco) or die (mysql_error());

?>



<?php



$nome=$_POST['nome'];
$sexo=$_POST['sexo'];
$email= $_POST['email'];
$senha= $_POST['senha'];
$senha1= $_POST['senha1'];
$cpf= $_POST['cpf'];
$ddd= $_POST['ddd'];
$telefone= $_POST['telefone'];
$estado= $_POST['estado'];
$cidade= $_POST['cidade'];
$rua= $_POST['rua'];
$bairro= $_POST['bairro'];
$numerocasa= $_POST['numerocasa'];
$cep= $_POST['cep'];

$sql= "SELECT email FROM conta";
$resultado =mysql_query($sql, $conexao);
while($dados= mysql_fetch_array($resultado)){

$emailbanco = $dados ['email'];

}

if(empty($_POST['nome'])){
	
        echo "<script>alert('Preencha todos os campos para concluir o cadastro.'); history.back();</script>";}

else if(empty($_POST['sexo'])){

         echo "<script>alert('Preencha todos os campos para concluir o cadastro.'); history.back();</script>";
}

else if(empty($_POST['email'])){

         echo "<script>alert('Preencha todos os campos para concluir o cadastro.'); history.back();</script>";
}

else if(empty($_POST['senha'])){

          echo "<script>alert('Preencha todos os campos para concluir o cadastro.'); history.back();</script>";
}

else if(empty($_POST['cpf'])){

         echo "<script>alert('Preencha todos os campos para concluir o cadastro.'); history.back();</script>";
}

else if(empty($_POST['ddd'])){

          echo "<script>alert('Preencha todos os campos para concluir o cadastro.'); history.back();</script>";
}

else if(empty($_POST['telefone'])){

          echo "<script>alert('Preencha todos os campos para concluir o cadastro.'); history.back();</script>";
}

else if(empty($_POST['estado'])){

          echo "<script>alert('Preencha todos os campos para concluir o cadastro.'); history.back();</script>";
}

else if(empty($_POST['cidade'])){

          echo "<script>alert('Preencha todos os campos para concluir o cadastro.'); history.back();</script>";
}

else if(empty($_POST['rua'])){

         echo "<script>alert('Preencha todos os campos para concluir o cadastro.'); history.back();</script>";
}

else if(empty($_POST['bairro'])){

         echo "<script>alert('Preencha todos os campos para concluir o cadastro.'); history.back();</script>";
}

else if(empty($_POST['numerocasa'])){

       echo "<script>alert('Preencha todos os campos para concluir o cadastro.'); history.back();</script>";
}

else if(empty($_POST['cep'])){

         echo "<script>alert('Preencha todos os campos para concluir o cadastro.'); history.back();</script>";
}

else if($email == $emailbanco){

         echo "<script>alert('Por favor, verifique o e-mail pois esse já está sendo usado'); history.back();</script>";
}

else if($senha != $senha1){

         echo "<script>alert('Por favor, verifique as senhas e tente novamente'); history.back();</script>";
}

else{


		
		

$sql= mysql_query("INSERT INTO conta (nome, sexo, email, senha, cpf, ddd, telefone, estado, cidade, rua, bairro, numerocasa, cep) VALUES('$nome', '$sexo', '$email', '$senha', '$cpf', '$ddd', '$telefone', '$estado', '$cidade', '$rua', '$bairro', '$numerocasa', '$cep')");
echo "<script> deucerto() </script>";










}

?>


</body>


</html>