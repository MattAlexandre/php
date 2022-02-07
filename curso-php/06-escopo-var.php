<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> escopo - var </title>
</head>
<body>

    <?php

    $nome = "paulin bacana";
    $num1 = 1;
    $num2 = 3;
    $num3 = 7;

        function exibiNome(){
            global $nome; //definido a variavel como global
            return $nome;
        }

        echo exibiNome();
        echo"<br>";
        echo"<hr>";
    
    //-----------------------------------------------------------

    function exibeCidade(){
        //escopo local
        global $cidade; // definindo var como global
        $cidade = ' são paulo ';

    }

    echo exibeCidade();
    echo $cidade;
    echo"<br>";
    echo"<hr>";

    //------------------------------------------------------------

    function soma(){
        echo $GLOBALS['num1'] + $GLOBALS['num2'] + $GLOBALS['num3'];
    }

    echo soma();
    



    
    
    
    
    
    ?>
    
</body>
</html>