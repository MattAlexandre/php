<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title> formulario </title>
</head>
<body>
<?php

if(iseet($_POST['enviar'])){
    $erros = []
}
?>

    <form action="process.php" method="POST">
        <a> idade: </a>
        <input type="text" name="idade" placeholder="idade" ><br>

        <a> email: </a>
        <input type="email" name="email"  placeholder="email"><br>

        <a> peso: </a>
        <input type="text" name="peso"  placeholder="peso" ><br>

        <a> ip: </a>
        <input type="email" name="ip"  placeholder="ip"><br>

        <a> url: </a>
        <input type="text" name="url"  placeholder="urls" ><br>

        <input type="submit" value="enviar" name="enviar" id="butom">

    </form>
    
</body>
</html>