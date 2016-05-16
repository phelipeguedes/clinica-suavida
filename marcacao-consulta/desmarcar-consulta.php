<?php 
	
	include "../php/conexao.php";

	$nome = $_POST["nome"];
	$query = "DELETE FROM consultas WHERE nome = '$nome'";
	$result = mysqli_query($con, $query) or die("Ocorreu um erro! A consulta não foi desmarcada.");

		if($result){
			echo "<script>alert('Consulta desmarcada com sucesso!')</script>";
		}else{
			echo "<script>alert('Ops! a consulta não foi desmarcada. Tente outra vez.')</script>";
		}

	mysqli_close($con);
 ?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Cancelar Consulta</title>
	<link rel="stylesheet" type="text/css" href="../css/desmarcar-consulta.css"/>
</head>
<body>
	
	<!-- Menu e campos de login -->

	<div id="interface">
		<header>
			<nav id="menu">
				<ul>
					<li><a href="../index.html">Home</a></li>
					<li><a href="../marcacao-consulta/autenticacao.html">Marcar	Consulta</a></li>
					<li><a href="../guia-medico.html">Guia Médico</a></li>
					<li><a href="cadastrar-medico_login.html">Cadastrar Médico</a></li>
					<li><a href="../cadastro-paciente/cadastrar-paciente_login.html">Cadastrar Paciente</a></li>
					<li><a href="../procedimentos.html">Procedimentos</a></li>
				</ul>
			</nav>
			<img src="../imagens/logo.jpg" id="logo" />
    
            <h4>Consultas</h4>
            <hr>

		</header>
	</div> 
	<p><a href="desmarcar-consulta.html"><input type="button" value="Retornar"></a></p>
</body>
</html>