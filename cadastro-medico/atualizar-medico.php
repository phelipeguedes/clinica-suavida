<?php include("../php/conexao.php"); ?> 
    
<?php    
    
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $crm = $_POST["crm"];
    $uf = $_POST["uf"];
    $nascimento = $_POST["nascimento"];
    //echo date('d-m-y', strtotime($nascimento));
    $nascimento = date("Y-m-d", strtotime(str_replace('/', '-', $nascimento)));
    //echo date('Y-m-d', strtotime($nascimento));
    $especialidade = $_POST["especialidade"];
    $email = $_POST["email"];
    $sexo = $_POST["sexo"];
    $residencia = $_POST["residencia"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    
    $query = (" UPDATE medicos SET nome='$nome', crm='$crm', uf='$uf', nascimento='$nascimento', especialidade='$especialidade', " .
             "email='$email', sexo='$sexo', faz_residencia='$residencia', login='$login', senha='$senha' WHERE id_medico= '$id' ");
    
    $ok = mysqli_query($con, $query);

    if($ok){
        echo "<script language='javascript' type='text/javascript'> alert('Medico(a) atualizado(a) com sucesso!'); 
        window.location.href='cadastrar-medico.php' </script>";
    }else{
        echo "Erro! Medico(a) não atualizado(a)";
    }
    
    mysqli_close($con);
?> 