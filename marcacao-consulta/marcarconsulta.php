<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Clínica Sua Vida</title>
    <script type="text/javascript">
        function marcarConsulta(){
           setTimeout("window.location='marcarconsulta-dados.php'", 5000);
        }
        function loginErrado(){
            setTimeout("window.location='autenticacao.html'", 5000);
            //alert("Número de cpf ou senha inválidos.");
        }
    </script>
</head>
<body>
    
<?php 
    
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];    
    $conecte = mysqli_connect('localhost', 'root', '', 'clinica_suavida');
    $sql = ("SELECT *FROM pacientes WHERE cpf = '$cpf' AND senha = '$senha' ");
    $consulta = mysqli_query($conecte, $sql) or die('Erro na consulta.');
    $row = mysqli_num_rows($consulta);
    
    /*
    if(isset($cpf)){
        echo "Tem";
    }else{
        echo "Nada";
    }*/
    
    if($row > 0){
        session_start();
        $_SESSION['cpf'] = $_POST['cpf'];
        $_SESSION['senha'] = $_POST['senha'];
        echo'Aguarde um momento. Você está sendo redirecionado...';
        echo'<script>marcarConsulta();</script>';
    }else{
        echo'Número de cpf ou senha inválidos. Aguarde e Tente novamente...';
        echo'<script>loginErrado();</script>';
    }
    
    
?>    

</body>    
</html>
