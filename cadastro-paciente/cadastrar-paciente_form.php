<!DOCTYPE html>
<html lang="pt-br">
<head>

	<!-- Página que contém o formulário p/ o cadastro de pacientes -->

	<meta charset="utf-8" />
	<title>Cadastro de Pacientes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/cadastrar_paciente.css" />
    <script src="../javascript/funcoes.js"></script>
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
					<li><a href="../cadastro-medico/cadastrar-medico_login.html">Cadastrar Médico</a></li>
					<li><a href="cadastrar-paciente_login.html">Cadastrar Paciente</a></li>
					<li><a href="../marcacao-procedimentos/procedimentos.html">Procedimentos</a></li>
				</ul>
			</nav>
			<img src="../imagens/logo.jpg" id="logo" />
            
            <h4>Cadastro de Pacientes</h4>
            <hr>
		</header>
	</div>
    
    <!-- Subtítulo e formulário de cadastro de pacientes -->
    
	<div id="cadastro">

		<!-- Envia os dados preenchidos p/ 'registrar-paciente.php ' -->

		<form action="registrar-paciente.php" method="post" name="cadastro" id="cadastro">
			<fieldset id="dados">
				<legend>Dados Pessoais</legend>
				<label class="lblcadastro">Nome:<input type="text" name="nome" id="nome" placeholder="nome" class="txtpaciente"	required /></label><br />
				<label class="lblcadastro">Nascimento:<input type="date" name="data" id="data" placeholder="nascimento" class="txtpaciente" required/></label><br /><label class="lblcadastro">Estado Civil:<input type="text" name="e_civil" id="e_civil" placeholder="estado civil" class="txtpaciente" required /></label><br /><br />

				<fieldset id="sexo">
					<legend>Sexo</legend>
					<label>Masculino<input type="radio" name="sexo" id="sexo" value="masculino" required /></label><br /> 
					<label>Feminino&nbsp;&nbsp;<input type="radio" name="sexo" id="sexo" value="feminino" required /></label>
				</fieldset>

				<label class="lblcadastro">CPF:<input type="text" name="cpf" id="cpf" placeholder="somente números" class="txtpaciente" required /></label><br />
				<label class="lblcadastro">RG:<input type="text" name="rg" id="rg" placeholder="somente números" class="txtpaciente" required /></label><br />
				<label class="lblcadastro">Plano:<input type="text"	name="plano" id="plano" placeholder="plano de saúde" class="txtpaciente" required/></label><br/><label class="lblcadastro">Senha:<input	type="password" name="senha" id="senha"	placeholder="digite uma senha" class="txtpaciente" required/></label><br/>
				<span id="historico"><label><br /></label>
				<textarea name="historico" cols="25" rows="16" placeholder="Histórico Médico" required></textarea></span>

			</fieldset>
			
			<br/>

			<fieldset id="endereco">
				<legend>Endereço de Correspondêcia</legend>
				<label class="lblcadastro">Logradouro:<input type="text" name="log" id="log" placeholder="rua, nº e bairro"	class="txtpaciente" required/></label>
				<br /> <label class="lblcadastro">Telefone:<input type="tel" name="telefone" id="telefone" placeholder="fone p/ contato" class="txtpaciente" required /></label><br /> 
				<label class="lblcadastro">Cidade:<input type="text" name="cidade" id="cidade" placeholder="cidade residente" class="txtpaciente" required/></label><br />
				<label class="lblcadastro">Estado:<input type="text" name="estado" id="estado" placeholder="estado residente" class="txtpaciente" required/></label><br />
				<p>
					<input type="submit" name="botao" id="botao" value="cadastrar" onclick="validarFormPaciente();" />
				</p>
			</fieldset>
		</form>
	</div>
    
</body>
</html>


