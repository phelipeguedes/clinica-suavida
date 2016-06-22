<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Clínica Sua Vida</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/cadastrar_medico.css" />
    <script src="../javascript/funcoes.js"></script>
</head>
<body>
    
    <?php include'validacao-cadastro-medico.php' ?>
    
	<!-- Menu -->
    
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
    
        	 	<h4>Alteração de Cadastro Médico</h4>
            		<hr>
		</header>
	</div> 
	
    <!-- Subtítulo e formulário para cadastro de médico(a) -->

	<div id="secao">
		
        <h4>Seção destinada a atualização no cadastro de médicos</h4>
        
		<form name="formulario" action="atualizar-medico.php" method="post" id="formulario">
			<fieldset id="cadastrar_medico">
                
                		<label class="lblcadastro">Identificação:<input type="text" name="id" id="id" class="txtcadastro" placeholder="id" required /></label><br/> 
				<label class="lblcadastro">Nome:<input type="text" name="nome" id="nome" class="txtcadastro" placeholder="nome" required/></label><br/>
				<label class="lblcadastro">CRM:<input type="text" name="crm" id="crm" class="txtcadastro" placeholder="crm" required /></label><br/>
				<label class="lblcadastro">UF:<input type="text" name="uf" id="uf" class="txtcadastro" placeholder="uf"	required /></label><br/>
				<label class="lblcadastro">Nascimento:<input type="date" name="nascimento" id="nascimento" class="txtcadastro" placeholder="data de nascimento" required /></label><br/>
				<label class="lblcadastro">Especialidade:<input type="text" name="especialidade" id="especialidade" class="txtcadastro"	placeholder="especialidade" required /></label><br/>
				<label class="lblcadastro">Email:<input type="email" name="email" id="email" class="txtcadastro" placeholder="email" required /></label><br/><br/> 

				Sexo:<label class="sexo">Masculino<input type="radio" name="sexo" id="masculino" value="masculino" required /></label>
				<label class="sexo" id="fem">Feminino<input type="radio" name="sexo" id="feminino" value="feminino" required /></label><br/><br/>
				Fazendo residência?:<label class="residencia" id="sim">Sim<input type="radio" name="residente" id="sim" value="sim" required /></label> 
				<label>Não<input type="radio" name="residente" id="nao" value="nao" required /></label><br/><br/>

				<aside id="lado">
					<label class="lbllado">Login:<input type="text"	name="login" id="login" class="txtcadastrolado"	placeholder="nome de usuario" required/></label><br/><br/><br/>
					<label class="lbllado">Senha:<input type="password"	name="senha" id="senha" class="txtcadastrolado" placeholder="senha" required/></label><br/>
					<p>
					    <input type="submit" value="atualizar" class="lbllado" id="btcadastrar" onclick="validarFormMedico();"/>
					</p>
				</aside>

			</fieldset>
		</form>
	</div>

</body>
</html>
