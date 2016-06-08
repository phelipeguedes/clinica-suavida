<?php
        
        include "../php/conexao.php";

        /* Recebendo os valores do formulário */
        
        $nome = $_POST['nome'];
        $crm = $_POST['crm'];
        $uf = $_POST['uf'];
        $nascimento = $_POST['nascimento'];
        /*echo date('d-m-y', strtotime($nascimento));
        *$nascimento = date("Y-m-d", strtotime(str_replace('/', '-', $nascimento)));  
        *echo date('Y-m-d', strtotime($nascimento));                                    /* Convertendo a data */   
        $especialidade = $_POST['especialidade'];
        $email = $_POST['email'];
        $sexo = $_POST['sexo'];
        $faz_residencia = $_POST['residencia'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];        

        /* Consulta sql p/ inserção dos dados */
        
        $query = "INSERT INTO medicos (nome, crm, uf, nascimento, especialidade, email, sexo, faz_residencia, login, senha)".
                 "VALUES('$nome', '$crm', '$uf', '$nascimento', '$especialidade', '$email', '$sexo', '$faz_residencia', '$login', " .
                 " '$senha')";

        mysqli_query($con, $query) or die('Erro ao acessar o banco de dados.');                                
    
        mysqli_close($con);                   
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registro de Médicos(as)</title>
</head>
<body>
    <h3>Olá, doutor(a), seja bem-vindo(a) à clínica Sua Vida!</h3>
    <p>Médico cadastrado com sucesso!</p>
    
    <br/>

    <!-- Voltar para a página de cadastro médico -->
    <a href="cadastrar-medico_form.php"><button>Voltar</button></a>
    
</body>
    
</html>