<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Bem-vindo(a)</title>
    <script type="text/javascript">
        function logincorreto(){
            setTimeout("window.location='painel.php'", 5000);
        }
        function loginerrado(){
            setTimeout("window.location='../index.html'", 5000);
        }
    </script>
    
</head>
<body>
    <center><h2>Sistema da clínica Sua Vida!</h2></center>
    <?php
        
        $login = $_POST['usuario'];
        $senha = $_POST['senha'];
        $connect = mysqli_connect('localhost', 'root', '', 'clinica_suavida');
        $sql = ("SELECT *FROM medicos WHERE login = '$login' AND senha = '$senha' ");
        //$db = mysqli_select_db('clinica_suavida');
        
        
        $consulta = mysqli_query($connect, $sql)
               or die("Erro ao selecionar!");
               $row = mysqli_num_rows($consulta);
            
            if($row > 0){
                session_start();
                $_SESSION['login'] = $_POST['usuario'];
                $_SESSION['senha'] = $_POST['senha'];
                echo "<center>Usuário(a) autenticado(a) com sucesso! Aguarde um instante...</center>";
                echo "<script>logincorreto();</script>";
            }else{
                echo "<center>Usuário ou senha inválidos. Aguarde um instante para tentar novamente...</center>";
                echo "<script>loginerrado();</script>";
            }
            
    
        /*
                echo"<script language='javascript' type='text/javascript'> alert('login e/ou senha incorretos!');window.location.href='login.html';</script>";
                die();
            }else{
                setcookie("login", $login);
                header("Location:index.php");
            }
        }*/
        
        
        //echo "Olá, " .$usuario.", você está logado no sistema.<br/><br/>";
        
    ?>
        
</body>    
</html>