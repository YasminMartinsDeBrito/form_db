<?php
    $dbRegister = $_POST['cadastro']
    $dbPassword = "";
    $dbUsername = "root";
    $dbHost = "Localhost";
    $dbName = "formulario-db";

    $conexao = new mysql($dbHost, $dbUsername,$dbPassword,$dbName)

    if($conexao -> connect_errno){
        echo "Erro"
    }
    else{
        echo "Conexão efetuada com sucesso"
    }
?>