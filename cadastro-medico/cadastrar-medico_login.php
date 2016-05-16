<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Clínica Sua Vida</title>
    <script type="text/javascript">
        function cadastrar(){
            setTimeout("window.location='cadastrar-medico.php'", 2000);
        }
        function loginErrado(){            
            setTimeout("window.location='cadastrar-medico_login.html'");
            alert("Login ou senha incorretos! :( ");
        }
    </script>
</head>
<body>
    <?php          
     
     $usuario = $_POST['usuario'];
     $senha = $_POST['senha'];
     $conecte = mysqli_connect('localhost', 'root', '', 'clinica_suavida'); 
     $sql = ("SELECT *FROM medicos WHERE login = '$usuario' AND senha = '$senha' ");
     $consulta = mysqli_query($conecte, $sql) or die('Erro!');
     $row = mysqli_num_rows($consulta);
              
     if($row > 0){
         session_start();
         $_SESSION['login'] = $_POST['usuario'];
         $_SESSION['senha'] = $_POST['senha'];
         echo 'Redirecionando...';
         echo '<script>cadastrar();</script>';
     }
     else{
         echo '<script>loginErrado();</script>';
     }   
    
?>
</body>    
</html>
