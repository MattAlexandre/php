<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> constantes </title>
</head>
<body>

<?php
    //identificador para um identificador unico 

    define("NOME"," eduardo "); // definidor de consts = define("nome da constante","valor que ela recebe")
    define("IDADE",24); // nome da const sempre em maiusculo em constantes.
    define("ALTURA",1.80);
    define("casado",true);

    

    define("TIMES",['santos','palmeiras','flamengo','corinthians','são paulo']);

    echo "meu nome é ".NOME." tenho ".IDADE." anos, ".ALTURA." de altura <BR>";
    echo TIMES[0]; //constantes são sempre globais
    echo var_dump(TIMES);
    echo"<br><hr>";


    function exibeNOME(){
        echo NOME;
    }

    exibeNOME();



?>
    
</body>
</html>