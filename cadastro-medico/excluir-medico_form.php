<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<title>Clínica Sua Vida</title>
<link rel="stylesheet" type="text/css" href="../css/cadastrar_medico.css" />
<script src="../javascript/funcoes.js"></script>
</head>
<body>
    
    <?php include'validacao-cadastro-medico.php' ?>
    
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
    
            <h4>Escolha uma das opções e identifique o/a médico(a) a ser deletado(a)</h4>
            <hr>
		</header>
	</div> 
	
    <!-- Subtítulo e formulário para cadastro de médico(a) -->

	<div id="secao">
		
        
        
		<form name="formulario" action="excluir-medico.php" method="post" id="formulario">
			
            <fieldset id="cadastrar_medico">
                
                <label class="lblcadastro">Identificação:<input type="text"
					name="id" id="id" class="txtcadastro" placeholder="id"
					required /></label><br /> 
				<label class="lblcadastro">Nome:<input type="text"
					name="nome" id="nome" class="txtcadastro" placeholder="nome"
					 /></label><br /> <label class="lblcadastro">CRM:<input
					type="text" name="crm" id="crm" class="txtcadastro"
					placeholder="crm" /></label><br /><br/><br/>
				<p>	<input type="submit" value="excluir" id="btexcluir" /> </p>
				

			</fieldset>
		</form>
	</div>

</body>
</html>
