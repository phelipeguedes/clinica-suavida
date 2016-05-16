<?php
        
        include "../php/conexao.php";
        
        $nome = $_POST['nome'];
        $crm = $_POST['crm'];
        $uf = $_POST['uf'];
        $nascimento = $_POST['nascimento'];
        /*echo date('d-m-y', strtotime($nascimento));
        $nascimento = date("Y-m-d", strtotime(str_replace('/', '-', $nascimento)));
        echo date('Y-m-d', strtotime($nascimento));*/        
        $especialidade = $_POST['especialidade'];
        $email = $_POST['email'];
        $sexo = $_POST['sexo'];
        $faz_residencia = $_POST['residencia'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];        
        
        $query = "INSERT INTO medicos (nome, crm, uf, nascimento, especialidade, email, sexo, faz_residencia, login, senha)".
                 "VALUES('$nome', '$crm', '$uf', '$nascimento', '$especialidade', '$email', '$sexo', '$faz_residencia', '$login', " .
                 " '$senha')";

        mysqli_query($con, $query) or die('Erro ao acessar o banco de dados.');                                
        
        //Limpa os campos de login e senha
            
        $login = "";
        $senha = "";
    
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
        <p><a href="../index.html">Voltar</a></p>
    
</body>
    
</html>