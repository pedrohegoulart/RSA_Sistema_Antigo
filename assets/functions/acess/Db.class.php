<?php
    $servidor = "localhost";
    $usuario = "pedrogoulart";
    $senha = "nerd2150799";
    $dbname = "sistema_fv";    
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conn){
        //die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso <br />";
    }      
?> 
