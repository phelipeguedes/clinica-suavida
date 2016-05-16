
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<title>Cadastro de Pacientes</title>
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
					<li><a href="../procedimentos.html">Procedimentos</a></li>
				</ul>
			</nav>
			<img src="../imagens/logo.jpg" id="logo" />
            
            <!--
			<form action="php/login.php" method="post" id="colaborador">
				<fieldset id="entrar">
					<label for="usuario" id="area"><br />Área restrita para<br />&nbsp;&nbsp;colaboradores</label>
					<input type="text" name="usuario" id="usuario" class="txtusuario"
						placeholder="usuario" required /> <input type="password"
						name="senha" id="senha" class="txtusuario" placeholder="senha"
						required /> <input type="submit" name="logar" id="logar"
						id="txtusuario" value="entrar" onclick="validarLogin();" /> <a
						href="cadastro-medico/cadastro-medico_login.html" id="cadastrar" name="cadastrar"
						class="txtusuario">Cadastre-se</a>
				</fieldset>
			</form>
            -->
            <h4>Cadastro de Pacientes</h4>
            <hr>
		</header>
	</div>
    
    <!-- Subtítulo e formulário de cadastro de pacientes -->
    
	<div id="cadastro">

		<form action="cadastro-paciente.php" method="post" name="cadastro"
			id="cadastro">
			<fieldset id="dados">
				<legend>Dados Pessoais</legend>
				<label class="lblcadastro">Nome:<input type="text"
					name="nome" id="nome" placeholder="nome" class="txtpaciente"
					required /></label><br /> <label class="lblcadastro">Nascimento:
                <input type="date" name="data" id="data"
					placeholder="nascimento" class="txtpaciente" required />
				</label><br /> <label class="lblcadastro">Estado Civil:<input
					type="text" name="e_civil" id="e_civil" placeholder="estado civil"
					class="txtpaciente" required /></label><br />
				<br />

				<fieldset id="sexo">
					<legend>Sexo</legend>
					<label>Masculino<input type="radio" name="sexo" id="sexo"
						value="masculino" required /></label><br /> <label>Feminino&nbsp;&nbsp;<input
						type="radio" name="sexo" id="sexo" value="feminino" required /></label>
				</fieldset>

				<label class="lblcadastro">CPF:<input type="text" name="cpf"
					id="cpf" placeholder="somente números" class="txtpaciente" required /></label><br />
				<label class="lblcadastro">RG:<input type="text" name="rg"
					id="rg" placeholder="somente números" class="txtpaciente" required /></label><br />
				<label class="lblcadastro">Plano:<input type="text"
					name="plano" id="plano" placeholder="plano de saúde"
					class="txtpaciente" required /></label><br /> <label class="lblcadastro">Senha:<input
					type="password" name="senha" id="senha"
					placeholder="digite uma senha" class="txtpaciente" required /></label><br />
				<span id="historico"><label><br /></label>
				<textarea name="historico" cols="25" rows="16"
						placeholder="Histórico Médico" required></textarea></span>

			</fieldset>
			<br />

			<fieldset id="endereco">
				<legend>Endereço de Correspondêcia</legend>
				<label class="lblcadastro">Logradouro:<input type="text"
					name="log" id="log" placeholder="rua, nº e bairro"
					class="txtpaciente" required /></label><br /> <label class="lblcadastro">Telefone:<input
					type="tel" name="telefone" id="telefone" placeholder="fone p/ contato"
					class="txtpaciente" required /></label><br /> <label class="lblcadastro">Cidade:<input
					type="text" name="cidade" id="cidade"
					placeholder="cidade residente" class="txtpaciente" required /></label><br />
				<label class="lblcadastro">Estado:<input type="text"
					name="estado" id="estado" placeholder="estado residente"
					class="txtpaciente" required /></label><br />
				<p>
					<input type="submit" name="botao" id="botao" value="cadastrar"
						onclick="validarFormPaciente();" />
				</p>
			</fieldset>
		</form>
	</div>
    <!--
    <footer id="rodape">
		<hr>
		<div id="institucional">
			<h4>INSTITUCIONAL</h4>
			<ul type="none">
				<li><a href="#">Sobre a Clínica</a></li>
				<li><a href="#">Atendimento ao Cliente</a></li>
				<li><a href="#">Trabalhe Conosco</a></li>
			</ul>
		</div>

		<div id="encontrar">
			<h4>ONDE ENCONTRAR</h4>
			<h4>Endereços:</h4>
			<p>
				Av. dos Cabritos, 500<br /> Centro - CEP: 60150-500<br />
				Fortaleza-CE
			</p>

			<p id="endereco2">
				Av. Brasil, 690<br /> Jardins - CEP: 60700-310<br /> Fortaleza-CE
			</p>

			<p id="endereco3">
				Av. das Camélias, 1020<br /> Rosas - CEP: 60900-900 Fortaleza-CE
			</p>
		</div>

		<div id="atendimento">
			<ul type="none">
				<h4>ATENDIMENTO</h4>
				<h4>Telefones:</h4>
				<li>(85)3030.4055 (Av. dos Cabritos)</li>
				<br />
				<li>(85)3030.5070 (Av. das Camélias)</li>
				<br />
				<li>(85)3030.4455 (Av. Brasil)</li>
				<br />
			</ul>
			<ul type="none" class="online">
				<h4>On-line:</h4>
				<li><a href="#">Chat On-line</a></li>
				<li><a href="#">Deficientes Auditivos</a></li>
				<li><a href="#">Perguntas Frequentes</a></li>
				<li><a href="#">Fale Conosco</a></li>
			</ul>
		</div>

		<div id="conectar">
			<ul type="none">
				<h4>SOCIAL</h4>
				<h4>Conecte-se:</h4>
				<br>
				<img src="imagens/social.png" />
			</ul>
		</div>

	</footer>
    -->
</body>
</html>


