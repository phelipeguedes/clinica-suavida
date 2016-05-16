<?php

    include "conexao.php";
   
    session_start();

    if(!isset($_SESSION['login']) || (!isset($_SESSION['senha']))){
        header("Location: ../index.html");
        exit;
    }else{
        echo "<center>Usuario(a) logado(a). =) </center>";
    }
      
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Painel</title>
        <link rel="stylesheet" type="text/css" href="../css/painel.css" />
    </head>
    
    <body>
        <nav id="menu">
            <ul>
                <li><a href="../marcacao-consulta/autenticacao.html">Marcar/Desmarcar/Pesquisar Consulta</a></li><br/><br/>
                <li><a href="../marcacao-procedimentos/marcar-operacao.html">Marcar/Desmarcar/Pesquisar Operação</a></li><br/><br/>
                <li><a href="../especialidade.html">Cadastrar/Alterar Especialidade</a></li><br/><br/>
                <li><a href="../marcacao-consulta/procedimentos.html">Cadastrar/Alterar Procedimentos</a></li><br/><br/>
                <li><a href="../cadastro-paciente/cadastrar-paciente.php">Cadastrar Pacientes</a></li><br/><br/>
            </ul>
        </nav>
        <p><a href="logout.php"><input type="button" name="botao" id="botao" value="Sair"/></a></p>
    </body>    
</html>