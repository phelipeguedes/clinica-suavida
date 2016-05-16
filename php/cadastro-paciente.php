<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Cadastro de Pacientes</title>
</head>
<body>
    <h3>Cadastro de Paciente</h3>
    <p>Resultado do cadastro</p>
    <?php 
        
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
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        
        /*
        if(empty($estado)){
            echo 'vazia';
        }else{
            echo 'tem!';
        }*/
    
        $dbc = mysqli_connect('localhost', 'root', '', 'clinica_suavida') or die('erro na conexão!') ;
        $query = "INSERT INTO pacientes(nome, nascimento, estado_civil, sexo, cpf, rg, plano, senha, historico, logradouro, bairro, cidade,". "estado)".
        "VALUES('$nome', '$nascimento', '$estado_civil', '$sexo', '$cpf', '$rg', '$plano', '$senha', '$historico','$logradouro','$bairro',". "'$cidade', '$estado')";
    
        
        
        mysqli_query($dbc, $query) or die('Erro na comunicação com o banco.');
            
        echo 'Paciente cadastrado(a) com sucesso!';
        
        //Limpa os campos de login e senha
        
        $cpf = "";
        $senha = "";
        
        mysqli_close($dbc);        
        
    ?>
        <p><a href="../index.html">Voltar</a></p>
</body>    
</html>