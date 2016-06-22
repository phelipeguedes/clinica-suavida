<!DOCTYPE html>
<html>
<head>
    
    <!-- Uma vez que o usuário tem um login correto, esta página o redireciona para o cadastro de médicos -->

    <meta charset="utf-8"/>
    <title>Cadastro de Médicos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../javascript/funcoes.js"></script>
</head>
<body>

    <!-- Faz a consulta no banco c/ os dados de usuário e senha fornecidos no campo de login -->

<?php          
     
     $usuario = $_POST['usuario'];
     $senha = $_POST['senha'];
     $conecte = mysqli_connect('localhost', 'root', '', 'clinica_suavida'); 
     $sql = ("SELECT *FROM medicos WHERE login = '$usuario' AND senha = '$senha' ");
     $consulta = mysqli_query($conecte, $sql) or die('Erro!');
     $row = mysqli_num_rows($consulta);
     
     // Se uma linha, com as informações do usuário, for encontrada no banco; a função 'cadastrar' é executada. Senão entra em ação 'loginErrado'

     if($row > 0){
         session_start();
         $_SESSION['login'] = $_POST['usuario'];
         $_SESSION['senha'] = $_POST['senha'];
         echo 'Redirecionando...';
         echo '<script>cadastrarMedico();</script>';
     }
     else{
         echo '<script>errarLoginMedico();</script>';
     }   
    
?>

</body>    
</html>

