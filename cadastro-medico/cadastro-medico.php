<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Bem-vindo(a)</title>
</head>
<body>
    <h3>Olá, doutor(a), seja bem-vindo(a) à clínica Sua Vida!</h3>
    <?php
        
        include"conexao.php";
        
        $nome = $_POST['nome'];
        $crm = $_POST['crm'];
        $uf = $_POST['uf'];
        $nascimento = $_POST['nascimento'];
        echo date('d-m-y', strtotime($nascimento));
        $nascimento = date("Y-m-d", strtotime(str_replace('/', '-', $nascimento)));
        echo date('Y-m-d', strtotime($nascimento));
        
        $especialidade = $_POST['especialidade'];
        $email = $_POST['email'];
        $sexo = $_POST['sexo'];
        $faz_residencia = $_POST['residencia'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];        
                
        if($login == "" || $login == null){
            echo "<script language='javascript' type='text/javascript'> alert('O login deve ser preenchido!');window.location.href='cadastrarmedico.html';</scipt> ";
        }
        else{
            $query = "INSERT INTO medicos (nome, crm, uf, nascimento, especialidade, email, sexo, faz_residencia, login,". "senha)".
                     "VALUES('$nome', '$crm', '$uf', '$nascimento', '$especialidade', '$email', '$sexo', '$faz_residencia', '$login',". "'$senha')";
            
            echo "<script language='javascript' type='text/javascript'>alert('Médico(a) cadastrado(a) com sucesso!');window.location.href='../index.html'</script>";
        }
            mysqli_query($dbc, $query)
                or die('Erro ao acessar o banco de dados.');                                
            
                echo "<script language='javascript' type='text/javascript'>alert('Médico não cadastrado.');window.location.href='cadastromedico.html'</script> ";                        
            
            echo "Médico cadastrado com sucesso!";
            
            //Limpa os campos de login e senha
            
            $login = "";
            $senha = "";
    
            mysqli_close($dbc);       
    
    ?>
        <p><a href="../index.html">Voltar</a></p>
    
</body>
    
</html>