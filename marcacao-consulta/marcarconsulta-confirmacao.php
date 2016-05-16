<?php 
    
    $conexao = mysqli_connect('localhost', 'root', '', 'clinica_suavida') or die('Erro na conexão!');
    session_start();
    
        $nome = $_POST["nome"];
        $telefone_fixo = $_POST["telefone"];
        $celular = $_POST["celular"];
        $email = $_POST["email"];
        $local = $_POST["local"];
        $medico = $_POST["especialidade"];
        $data = $_POST["data"];
        date('d-m-Y', strtotime($data));
        $local = $_POST["local"];
        //echo "Consulta marcada com sucesso!<br/><br/>";    
        echo "Detalhes do atendimento: <br/>";
        echo "Consulta com Dr(a). " .$medico ."<br/>";
        echo "Data e horario: " .$data ."<br/>";
        echo "Local: " .$local . "<br/>";   

        $query = "INSERT INTO consultas (nome, telefone_fixo, telefone_celular, email, local, especialidade, data)".
                              "VALUES('$nome', '$telefone_fixo', '$celular', '$email', '$local', '$medico', '$data')";

        $ok = mysqli_query($conexao, $query) or die("Errou!");

        if($ok){
            echo "<p style='color:green'>Consulta marcada com sucesso!</p>";
        }
        else{
            echo "<p style='color:red'>Infelizmente esta consulta não foi marcada.</p>";
        }

    $fecharConexao = mysqli_close($conexao);
?>

<html>
<head>
    <meta charset="utf-8"/>
    <title>Detalhes da Consulta</title>
</head>    
<body>
    <p><a href="marcarconsulta-dados.php"><input type="button" name="botao" value="Voltar" style="padding: 6px; border-radius:1px; width: 70px" /></a>
        <a href="logout-paciente.php"><input type="button" name="botao2" value="Sair" style="padding: 6px; border-radius:1px; width: 70px" /></a></p>
</body>
</html>