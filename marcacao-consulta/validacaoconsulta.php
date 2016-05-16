<?php 
    
    $conexao = mysqli_connect('localhost', 'root', '', 'clinica_suavida') or die('Erro na conexão!');
    
    session_start();

    if(!isset($_SESSION['cpf']) || (!isset($_SESSION['senha']))){
        header('Location:autenticacao.html');
         exit;       
    }    
    
?>