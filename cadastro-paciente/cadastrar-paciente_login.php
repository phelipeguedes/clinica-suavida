<!DOCTYPE html>
<html>
<head>
    <!-- Uma vez que o usuário tem um login correto, esta página o redireciona para o cadastro de pacientes -->

    <script type="text/javascript">

        // Funções que verificam se o login é válido. A 1ª função redireciona p/ o cadastro, a 2ª p/ a página de login novamente 

        function cadastrar(){
            setTimeout("window.location='cadastrar-paciente_form.php'", 2000);
        }
        function loginErrado(){
            setTimeout("window.location='cadastrar-paciente_login.html'");
            alert('Login ou senha incorretos! :( ');
        }
    </script>
</head>
<body>

    <!-- Faz a consulta no banco c/ os dados de usuário e senha fornecidos no campo de login -->

    <?php 
        
        $conecte = mysqli_connect('localhost', 'root', '', 'clinica_suavida') or die('Algo saiu errado!');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $sql = ("SELECT *FROM medicos WHERE login = '$usuario' AND senha = '$senha' ");
        $consulta = mysqli_query($conecte, $sql) or die ('Ops! algo errado.');
        $row = mysqli_num_rows($consulta);
        
        // Se uma linha, com as informações do usuário, for encontrada no banco; a função 'cadastrar' é executada. Senão entra em ação 'loginErrado'

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