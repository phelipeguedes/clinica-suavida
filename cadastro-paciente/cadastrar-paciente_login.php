<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
        function cadastrar(){
            setTimeout("window.location='cadastrar-paciente.php'", 2000);
        }
        function loginErrado(){
            setTimeout("window.location='cadastrar-paciente_login.html'");
            alert('Login ou senha incorretos! :( ');
        }
    </script>
</head>
<body>
    <?php 
        
        $conecte = mysqli_connect('localhost', 'root', '', 'clinica_suavida') or die('Algo saiu errado!');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $sql = ("SELECT *FROM medicos WHERE login = '$usuario' AND senha = '$senha' ");
        $consulta = mysqli_query($conecte, $sql) or die ('Ops! algo errado.');
        $row = mysqli_num_rows($consulta);
        
        if($row > 0){
            session_start();
            $_SESSION['login'] = $_POST['usuario'];
            $_SESSION['senha'] = $_POST['senha'];
            echo 'Redirecionando...';
            echo '<script>cadastrar();</script>';            
        }else{
            echo '<script>loginErrado();</script>';
        }
        
    ?>
</body>    
</html>