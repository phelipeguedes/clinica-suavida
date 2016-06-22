<?php 

	include"../php/conexao.php"; 

	$nome = $_POST['nome'];
	$query = "SELECT *FROM consultas WHERE nome LIKE '%".$nome."%' ";

	$result = mysqli_query($con, $query) or die ("Errou!");
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Resultado da Busca</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/pesquisar-consulta.css"/>
</head>
<body>
	
	<!-- Menu e campos de login -->

	<div id="interface">
		<header>
			<nav id="menu">
				<ul>
					<li><a href="../index.html">Home</a></li>
					<li><a href="../marcacao-consulta/autenticacao.html">Marcar Consulta</a></li>
					<li><a href="../guia-medico.html">Guia Médico</a></li>
					<li><a href="cadastrar-medico_login.html">Cadastrar Médico</a></li>
					<li><a href="../cadastro-paciente/cadastrar-paciente_login.html">Cadastrar Paciente</a></li>
					<li><a href="../procedimentos.html">Procedimentos</a></li>
				</ul>
			</nav>
			<img src="../imagens/logo.jpg" id="logo" />
    
            <h4>Consultas</h4>
            <hr>

            <table style="border:1px">
            	<tr>
            		<th>Nome do paciente</th>
            		<th>Médico/especialidade</th>
            		<th>Local</th>
            		<th>Data</th>
            	</tr>
            	
            	<?php          		

            		while($usuario = mysqli_fetch_array($result)){ ?>
            				<tr>
            					<td><?= $usuario['nome'] ?></td>
            					<td><?= $usuario['especialidade'] ?></td>
            					<td><?= $usuario['local'] ?></td>
            					<td><?= $usuario['data'] ?></td>
            				</tr>
                <?php 
                		
                	}

                	mysqli_close($con);
                ?>            	 
            </table>

		</header>
	</div> 
	<p><a href="pesquisar-consulta.html"><input type="button" value="Retornar"></a></p>
</body>
</html>
