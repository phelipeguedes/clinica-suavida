<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Bem-vindo(a)</title>
</head>
<body>
    <h3>Sistema da clínica Sua Vida!</h3>
    <?php
        
        $usuario = $_POST['usuario'];
        
        echo "Olá, " .$usuario.", você está logado no sistema.<br/><br/>";
        
    ?>
        <p><a href="index.html">Voltar</a></p>
</body>
    
</html>