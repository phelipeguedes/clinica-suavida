<?php 
    
    include"../php/conexao.php";
    
    session_start();
    
    if(!isset($_SESSION['login']) || (!isset($_SESSION['senha']))){
        header('Location: cadastrar-medico_login.html');
        exit;
    }
    
?>