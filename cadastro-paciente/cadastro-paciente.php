<?php 
    
    $dbc = mysqli_connect('localhost', 'root', '', 'clinica_suavida') or die('Ops! algo deu errado!'); //conexão
    
    $nome = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    echo date('d-m-y', strtotime($nascimento));
    $nascimento = date("Y-m-d", strtotime(str_replace('/', '-', $nascimento)));
    echo date('Y-m-d', strtotime($nascimento));
    $e_civil = $_POST['e_civil'];
    $sexo = $_POST['sexo'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $plano = $_POST['plano'];
    $senha = $_POST['senha'];
    $historico = $_POST{'historico'};
    $logradouro = $_POST['log'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
            
    $query = "INSERT INTO pacientes (nome, nascimento, estado_civil, sexo, cpf, rg, plano, senha, historico, logradouro, bairro, cidade, estado) " . "VALUES ('$nome', '$nascimento', '$e_civil', '$sexo', '$cpf', '$rg', '$plano', '$senha', '$historico', '$logradouro', " . " '$bairro', '$cidade', '$estado')";
    
    echo '<script language="javascript"> alert("Paciente cadastrado com sucesso!"); </script>';
    echo "<script language='javascript'>window.location.href='cadastrar-paciente.php'</script>";

    mysqli_query($dbc, $query) or die("Ops! ocorreu algum erro!");

    mysqli_close($dbc);
    
    
    
?>