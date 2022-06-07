<?php

require_once 'pessoa.php';

$pessoa = new Pessoa("cruddpo","localhost","root","");


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title> projetin-crud </title>
</head>
<body>

    <section id="section1">

        <form action="process.php" method="post">
            <h1> cadastro </h1>

            <label for="name"> nome: </label><br>
            <input type="text" name="name" id="name"><br>

            <label for="number"> telefone: </label><br>
            <input type="text" name="number" id="number"><br>

            <label for="email"> email: </label><br>
            <input type="text" name="email" id="email" ><br>

            <input type="submit" value="cadastrar" id="buttom">

        </form>

    </section>
    <section id="section2">
    <table>
            <tr id="title1"><!-- linha -->
                <td> nome </td><!-- coluna -->
                <td> telefone </td>
                <td> email </td>
            </tr>

        <?php
        
        $dados = $pessoa->buscarDados();
        
        if(count($dados) > 0 ){
            for($i = 1; $i < count($dados); $i++){

                echo"<tr id='title2'> ";
                foreach ($dados[$i] as $indice => $value) {
                    if($indice != "id_pessoa"){
                        echo"<td>".$value."</td>";
                    }
                }
                
                ?>
                <td id="title2"> 
                    <a href="#"> editar </a>
                    <a href="#"> excluir </a>
                </td>
            <?php
                echo"</tr>";
            }
        }
        
        ?>
        </table>
    </section>

    
</body>
</html>