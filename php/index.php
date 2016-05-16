<?php

    $login_cookie = $_COOKIE['login'];
        
        if(isset($login_cookie)){
            echo 'Bem-Vindo, $login_cookie <br/>';
            echo "Essas informações <font color='red'>PODEM</font> ser acessadas por você!";    
        }
        else{
            echo "Bem-Vindo, convidado <br/> ";
            echo "Essa informações <font color='red'>NÃO PODEM</font> ser acessadas por você!";
            echo "<br/><a href='index.html'>Faça login </a> Para ver o conteúdo";
        }
      
?>