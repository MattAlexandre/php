<?php

    $dbhost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'nome do banco ';

    $conexao = new mysqli($dbhost,$dbUsername,$dbPassword,$dbName);

    /* teste pra conxão 
    if($conexao->connect_errno){
        echo "erro";
    }else{
        echo" conexao realizada com sucesso";
    }
    */