<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> funções condicionais </title>
</head>
<body>
    
<?php
/*
    condicionais

    if
    else
    else if

*/


    $num = 12;
    $num = 13;

    if($num == 12){
        echo "$num é igual a 12";
    }
    elseif($num <= 9 ){
        echo"$num é menor igual a 9";
    }
    else{
        echo "$num não igual a 12";
    }

    echo"<hr><br>";

    //operador ternario 

    $media = 7;

    echo ($media >= 5) ?"aprovado" :"reprovado";

    echo"<br><hr>";
    //--------------------------------------------------------
    //switch case


    $color = "black";

    switch($color){
        case "black":
            echo" vossa cor favorita é: $color";
            break;

        case "red":
            echo"vossa cor favorita é: $color";
            break;

        case "blue":
            echo"vossa cor favorita é: $color";
            break;

        default:
            echo"vossa cor favorita não é black nen red nen blue ";
    }

    



?>

</body>
</html>