<?php include("../php/conexao.php");?>

<?php 
    
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $crm = $_POST["crm"];

    $query1 = ("DELETE FROM medicos WHERE id_medico = '$id' ");
    $query2 = ("DELETE FROM medicos WHERE nome = '$nome' ");
    $query3 = ("DELETE FROM medicos WHERE crm = '$crm' ");
    
    // em mysqli_query coloca-se, respectivamente, a variável de conexão e depois a variável de consulta.
    $ok1 = mysqli_query($con, $query1) or die ('Erro!');
    $ok2 = mysqli_query($con, $query2) or die ('Erro!');
    $ok3 = mysqli_query($con, $query3) or die ('Erro!');
    
    if($ok1){
        echo("Médico(a) deletado(a) com sucesso!");
    }else{
        echo("Algo saiu errado. Médico(a) não deletado(a)");
    }

    if($ok2){
        echo("Médico(a) deletado(a) com sucesso!");
    }else{
        echo("Algo saiu errado. Médico(a) não deletado(a)");
    }

    if($ok3){
        echo("Médico(a) deletado(a) com sucesso!");
    }else{
        echo("Algo saiu errado. Médico(a) não deletado(a)");
    }

    mysqli_close($con);
?> 