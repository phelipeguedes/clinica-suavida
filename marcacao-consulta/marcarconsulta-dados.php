<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Clínica Sua Vida</title>
    <link rel="stylesheet" type="text/css" href="../css/marcarconsulta-dados.css"/>
    <script type="text/javascript" src="../javascript/funcoes.js"></script>
</head>
<body>
    
<?php include'validacaoconsulta.php'; ?>    
    
<div id="interface">
    <header>
    <nav id="menu">
        
        <ul>            
            <li><a href="../index.html">Home</a></li>    
            <li><a href="../marcacao-consulta/autenticacao.html">Marcar Consulta</a></li>    
            <li><a href="../guia-medico.html">Guia Médico</a></li>    
            <li><a href="../cadastro-medico_login.html">Cadastrar Médico</a></li>    
            <li><a href="../cadastro-paciente/cadastrar-paciente_login.html">Cadastrar Paciente</a></li>    
            <li><a href="../procedimentos.html">Procedimentos</a></li>    
        </ul>
    </nav>
    
        <img src="../imagens/logo.jpg" id="logo" />    
        
        <form action="login.php" method="post" id="colaborador">
            <fieldset>
                <label for="usuario" id="area"><br/>Área restrita para<br/>&nbsp;&nbsp;colaboradores</label>
                <input type="text" name="usuario" id="usuario" class="txtusuario" placeholder="usuario" required/>
                <input type="password" name="senha" id="senha" class="txtusuario" placeholder="senha" required/>
                <input type="submit" name="logar" id="logar" id="txtusuario" value="entrar" onclick="validarLogin();" />
                <a href="cadastrarmedico.html" id="cadastrar" name="cadastrar" class="txtusuario">Cadastre-se</a>
            </fieldset>
        </form>        
    </header>
</div> 
    
<div id="corpo">

    <p>OLÁ!<br/>BEM VINDO(A) A MARCAÇÃO DE CONSULTAS DA CLÍNICA SUA VIDA.</p>
    
    <form name="formulario" method="post" action="marcarconsulta-confirmacao.php" onsubmit="return validarConsultaDados(this);">
        <p><label>NOME:</label><br/>
        <input type="text" name="nome" id="nome" placeholder="Nome do paciente" class="txtconsulta" /></p>
        <p><label>TELEFONE FIXO:</label><br/>
        <input type="tel" name="telefone" id="telefone" placeholder="(99)9999-9999" class="txtconsulta"/></p>
        <p><label>TELEFONE CELULAR:</label><br/>
        <input type="tel" name="celular" id="celular" placeholder="(99)9999-9999" class="txtconsulta"/></p>
        <p><label>EMAIL:</label><br/>
        <input type="email" name="email" id="email" placeholder="paciente@email.com" class="txtconsulta"/></p>
        
        <p id="detalhes">*Detalhes da consulta</p>
        
        <p><label>LOCAL:</label><br/>
        <select name="local" id="local" class="txtconsulta2" required>
            <option value="">selecione um local</option>
            <option value="Av. Brasil, 690 - Centro">Av. Brasil, 690 - Jardins</option>    
            <option value="Av. dos Cabritos, 500 - Centro">Av. dos Cabritos, 500 - Centro</option>    
            <option value="Av. das Camélias, 1020 - Rosas">Av. das Camélias, 1020 - Rosas</option>    
        </select>
            
        <p><label>ESPECIALIDADE:</label><br/>
        <select name="especialidade" id="especialidade" class="txtconsulta2" required>
            <option value="">selecione uma medico</option>
            
            <optgroup label="Cardiologia">
                <option value="Ariosvaldo Clementino - Cardiologista">Ariosvaldo Clementino</option>
                <option value="Vancinildo de Assis - Cardiologista">Vancinildo de Assis</option>
                <option value="Deuzanira Crispim - Cardiologista">Deuzanira Crispim</option>
                <option value="Imaculada Fransquinha - Cardiologista">Imaculada Fransquinha</option>
            </optgroup>    
            <optgroup label="Dermatologia">
                <option value="Cambraia Santos - Dermatologista">Cambraia Santos</option>
                <option value="Gertrudes Damasceno - Dermatologista">Gertrudes Damasceno</option>
                <option value="Valfrido Maia - Dermatologista">Valfrido Maia</option>
                <option value="Herbenegildo Fonseca - Dermatologista">Herbenegildo Fonseca</option>
            </optgroup>
            <optgroup label="Gastroenterologia">
                <option value="Crisanto Celestino - Gastroenterologista">Crisanto Celestino</option>
                <option value="Jaçanã Sampaio - Gastroenterologista">Jaçanã Sampaio</option>
                <option value="Tertuliano Chagas - Gastroenterologista">Tertuliano Chagas</option>
                <option value="Camilildo Abreu - Gastroenterologista">Camilido Abreu</option>
            </optgroup>
            <optgroup label="Ortopedia/Traumatologia">
                <option value="José Façanha - Ortopedista/Traumatologista">José Façanha</option>
                <option value="Marivaldo Marcondes - Ortopedista/Traumatologista">Marivaldo Marcondes</option>
                <option value="Amadeu Teobaldo - Ortopedista/Traumatologista">Amadeu Teobaldo</option>
                <option value="Francisco Epaminondas - Ortopedista/Traumatologista">Francisco Epaminondas</option>
            </optgroup>
        </select>
            
            <p><label>ESCOLHA UMA DATA</label><br/>
                <input type="datetime-local" name="data" id="data" class="txtconsulta" required/> 
            </p>
            <p>
                <input type="submit" name="marcar" id="marcar" value="Marcar" onclick="validarConsultaDados();" />
            </p>
    </form>
</div>
    
    <!-- Rodapé presente em algumas páginas -->
    
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
        <p>Av. dos Cabritos, 500<br/>
           Centro - CEP: 60150-500<br/>
           Fortaleza-CE    
        </p>

        <p id="endereco2">Av. Brasil, 690<br/>
           Jardins - CEP: 60700-310<br/>
           Fortaleza-CE    
        </p>

        <p id="endereco3">Av. das Camélias, 1020<br/>
           Rosas - CEP: 60900-900
           Fortaleza-CE    
        </p>
    </div>    
    
    <div id="atendimento">
        <ul type="none">
            <h4>ATENDIMENTO</h4> 
            <h4>Telefones:</h4>
            <li>(85)3030.4055 (Av. dos Cabritos)</li><br/>
            <li>(85)3030.5070 (Av. das Camélias)</li><br/>
            <li>(85)3030.4455 (Av. Brasil)</li><br/>                        
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
                <h4>Conecte-se:</h4><br>
            <img src="../imagens/social.png"/>
        </ul>
    </div>   
    
</footer>        
    
    <?php 
        echo "<script type='text/javascript'>
                if(validarConsultaDados() == false){
                    alert('Preencha os campos corretamente.);
                    header('Location: marcarconsulta-dados.php');
                }
              </script>"
    ?>
    
</body>
</html>