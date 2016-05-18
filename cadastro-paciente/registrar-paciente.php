<?php 
        // Adiciona o paciente ao banco de dados

        include "../php/conexao.php";

        $nome = $_POST['nome'];
        $nascimento = $_POST['data'];
        $estado_civil = $_POST['e_civil'];
        $sexo = $_POST['sexo'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $plano = $_POST['plano'];
        $senha = $_POST['senha'];
        $historico = $_POST['historico'];
        $logradouro = $_POST['log'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];

        // Script sql p/ adicionar os dados vindos do formulário
    
        $query = "INSERT INTO pacientes(nome, nascimento, estado_civil, sexo, cpf, rg, plano, senha, historico, logradouro, cidade, estado)".
                 "VALUES('$nome', '$nascimento', '$estado_civil', '$sexo', '$cpf', '$rg', '$plano', '$senha', '$historico','$logradouro',". 
                 "'$cidade','$estado')";  
        
        
        mysqli_query($con, $query) or die('Erro na comunicação com o banco.');
        
        //Limpa os campos de login e senha
        
        $cpf = "";
        $senha = "";
        
        mysqli_close($con);        
        
    ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Cadastro de Pacientes</title>
</head>
<body>
    <h3>Cadastro de Paciente</h3>
    <p>Paciente cadastrado com sucesso!</p>
    
        <p><a href="../index.html"><input type="button" value="Voltar"></a></p>
</body>    
</html>