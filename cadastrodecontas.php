<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Adote um pet - Cadastro de contas</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/validade.js"> </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"> </script>
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
				<li><a href="login.php" accesskey="2" title="">Login</a></li>
				<li class="active"><a href="cadastrodecontas.php" accesskey="3" title="">Cadastre-se</a></li>
				<li><a href="atendimento.php" accesskey="5" title="">Atendimento</a></li>
                                 <li><a href="sobre.php" accesskey="4" title="">Sobre</a></li>
<li><a href="administracao.php" accesskey="6" title="">Administração</a></li>

				
                            

			</ul>
		</div>
	</div>


<div class="wrapper">
	
	<div id="welcome" class="container">
<div class="title">

<form name="signup" action="cadastrarconta.php" method="post" enctype="multipart/form-dada">
<p>


<body bgcolor="#EEE5DE" topmargin="30" leftmargin="0" rightmargin="0">









<div id="cadastroconta">



<font face="questrial">
<font color="#404040"> 



<strong>
<p>
<div align="center">
<h1> Crie sua conta </h1> </font>
</p>
</div>
</strong>


		<table id="cadastroconta_table" align="center">
			



			<tr>
<td>Nome:</td>
<td><input   type="text" name="nome"  size="30" maxlenght="60"></input>  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp </td>


<td>Estado:</td>
				<td><select name="estado" id="estado" style="width: 242px">
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

			
			</tr>




<tr>
				<td>Sexo:</td>
				<td> <select name="sexo" id="sexo" style="width: 242px">
        <option value=" "> </option>
	<option value="Feminino">Feminino</option>
	<option value="Masculino">Masculino</option>
	
	</select> </td>

<td>Cidade:</td>
<td><input type="text" name="cidade" id="cidade" class="txt" size="30" maxlenght="80"></input> &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp</td>


			</tr>

<tr>
				
<td>Email:</td>
<td><input  type="text" name="email"   size="30" maxlenght="75" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"</input> </td>
 
  <td>Rua:</td>
<td><input  name="rua" type="text"  size="30" maxlenght="80" </input> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>

		
			</tr>


<tr>
<td>Senha:</td>
<td><input  type="password" name="senha"   size="30" maxlenght="40" </input></td>

<tr>
<td>Confirme a senha:</td>
<td><input  type="password" name="senha1"   size="30" maxlenght="40" </input></td>
 
<td>Bairro:</td>			
<td><input  name="bairro" type="text"  size="30" maxlenght="50" </input></td>

                     </tr>

<tr>
<td>CPF:</td>
<td><input  type="text" name="cpf" id="cpf"  size="30" maxlenght="20"  </input> &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp </td>



<td>Nº da casa:</td>
<td><input  name="numerocasa" type="text"  size="30" maxlenght="25" pattern="[0-9]+$"</input>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>
	           </tr>



<tr>
 <td> Telefone: </td>
<td><select name="ddd" style="width: 242px>
      <option value=" "> </option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="31">31</option>
	<option value="32">32</option>
	<option value="33">33</option>
	<option value="34">34</option>
	<option value="35">35</option>
	<option value="36">36</option>
	<option value="37">37</option>
	<option value="38">38</option>
	<option value="39">39</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
	<option value="32">32</option>
	<option value="33">33</option>
	<option value="34">34</option>
	<option value="35">35</option>
	<option value="36">36</option>
	<option value="37">37</option>
	<option value="38">38</option>
	<option value="39">39</option>
	<option value="41">41</option>
	<option value="42">42</option>
	<option value="43">43</option>
	<option value="44">44</option>
	<option value="45">45</option>
	<option value="46">46</option>
	<option value="47">47</option>
	<option value="48">48</option>
	<option value="49">49</option>
	<option value="51">51</option>
	<option value="52">52</option>
	<option value="53">53</option>
	<option value="54">54</option>
	<option value="55">55</option>
	<option value="56">56</option>
	<option value="57">57</option>
	<option value="58">58</option>
	<option value="59">59</option>
	<option value="61">61</option>
	<option value="62">62</option>
	<option value="63">63</option>
	<option value="64">64</option>
	<option value="65">65</option>
	<option value="66">66</option>
	<option value="67">67</option>
	<option value="68">69</option>
	<option value="71">71</option>
	<option value="72">72</option>
	<option value="73">73</option>
	<option value="74">74</option>
	<option value="75">75</option>
	<option value="76">76</option>
	<option value="77">77</option>
	<option value="78">78</option>
	<option value="79">79</option>
	<option value="81">81</option>
	<option value="82">82</option>
	<option value="83">83</option>
	<option value="84">84</option>
	<option value="85">85</option>
	<option value="86">86</option>
	<option value="87">87</option>
	<option value="88">88</option>
	<option value="89">89</option>
	<option value="91">91</option>
	<option value="92">92</option>
	<option value="93">93</option>
	<option value="94">94</option>
	<option value="95">95</option>
	<option value="96">96</option>
	<option value="97">97</option>
	<option value="98">98</option>
	<option value="99">99</option>
</select>
<input  type="text" name="telefone" id="telefone"  size="24" maxlenght="20" </input> </td>


 	<td>CEP:</td>
<td><input  name="cep" type="text" id="cep" size="30" maxlenght="20"  </input></td>



 

</tr>
</table>

</div>


<br> </br>
<div align="center"> 
<input type="submit" value="Cadastrar">
<input type="reset" value="Limpar">
</div>
</form>
<p> </p>



<footer>
</div>
</div>
</div>
<div id="copyright">
	<font face="Questrial"><p>&copy; Adote um pet. Todos os direitos reservados. | Desenvolvedores: <strong> Igor Castilho </strong> e <strong> Paula Morandi </strong>.</p> </font>

</div>

</footer>

</body>
</html>