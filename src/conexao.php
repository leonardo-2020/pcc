<?php

//variaveis de acesso ao banco
   
    $servidor= "127.0.0.1";
    $user= "user_sindico";
    $password= "123456";
    $bd_name= "db_condo";

    //chamada de conexão

    $conn = new mysqli($servidor,$user,$password,$bd_name);
    
    // Validar a conexão
     if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
    
