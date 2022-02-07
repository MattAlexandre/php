<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> op - aritmaticos </title>
</head>
<body>

    <?php
    
    // operadores = 
    /*
    adição + 
    subtração -
    multiplicação *
    divisão /
    modulo %
    exponeciação **
    */

    $nums = ["num1" => 10,"num2" => 20,"num3" => 30,"num4" => 40];

    $soma = $nums["num1"] + $nums["num4"];
    
    $sub = $nums["num2"] - $nums["num3"];

    $multi = $nums["num3"] * $nums["num1"];

    $div = $nums["num4"] / $nums["num2"];

    $mod = $nums["num1"] % $nums["num4"];

    $expo = $nums["num2"] ** $nums["num3"];

    echo"
        soma = $soma <br>
        subtação = $sub <br>
        multiplicação = $multi <br>
        divisão = $div <br>
        modulo = $mod <br>
        exponenciação = $expo <br>
    
    
    ";

    
    
    
    
    
    
    
    
    ?>
    
</body>
</html>