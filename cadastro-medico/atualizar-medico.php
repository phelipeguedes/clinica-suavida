<?php include("../php/conexao.php"); ?> 
    
<?php 

    /* Recebendo os valores do formulário */   
    
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $crm = $_POST["crm"];
    $uf = $_POST["uf"];
    $nascimento = $_POST["nascimento"];
    //echo date('d-m-y', strtotime($nascimento));
    $nascimento = date("Y-m-d", strtotime(str_replace('/', '-', $nascimento))); /* Convertendo a data */
    //echo date('Y-m-d', strtotime($nascimento));
    $especialidade = $_POST["especialidade"];
    $email = $_POST["email"];
    $sexo = $_POST["sexo"];
    $residente = $_POST["residente"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    
    /* Consulta sql para a atualização dos dados */

    $query = (" UPDATE medicos SET nome='$nome', crm='$crm', uf='$uf', nascimento='$nascimento', especialidade='$especialidade', " .
             "email='$email', sexo='$sexo', residente='$residente', login='$login', senha='$senha' WHERE id_medico= '$id' ");
    
    $ok = mysqli_query($con, $query); /* '$ok' recebe as informações da conexão e da consulta sql  */

    /* Se '$ok' estiver certa, após a alteração o usuário é redirecionado p/ página de cadastro de médicos */

    if($ok){
        echo "<script language='javascript' type='text/javascript'> alert('Medico(a) atualizado(a) com sucesso!'); 
              window.location.href='cadastrar-medico_form.php' </script>";
    }else{
        echo "Erro! Médico(a) não atualizado(a)";
    }

    /* Fechando a conexão */
    
    mysqli_close($con);
?> 