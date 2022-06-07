<?php
require_once "user.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa dados</title>
    <style type="text/css">
        body{
            margin: 0;
            padding: 0;
        }
        .content-array{
            height: 1080px;
            text-align: center;  
        }
        .content-array h1{
            margin: center;
            text-align: center;
        }
        .content-array h1 {
            text-align: center;

        }
        .content-array table {
            border: 1px solid red;
            width: 60% !important;
            margin: auto;
        

        }
        .content-array a {
            color: red;

        }
        .content-array .content-center {
            position
            top: 50%;
            left: 50%;

        }
    </style>
</head>
<body>
    <div class="content-array">
            <div class="content-center">


            <?php 

            #Pega Ano nascimento
            $anoNasc = $_POST['ano'];
            $mesNasc = $_POST['mes'];
            $diaNasc = $_POST['dia'];
            

            #Dados gerais
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $sexo = $_POST['sexo'];
            $cep = $_POST['cep'];
            $estado = $_POST['estado'];
            $cNum = $_POST['cNum'];
            $rua = $_POST['rua'];
            
            $nascimento = $anoNasc . "-" . $mesNasc . "-" . $diaNasc;
            // Criando Novo Objeto - User.php para process.php

            //instanciamento - create obj
            $user = new User($name);
            $pessoa = new User('carlin');
            
            #Setando os Dados no - SET
            $user->setName($nome);
            $user->setEmail($email);
            $user->setCel($tel);
            $user->setSexo($sexo);
            $user->setCep($cep);
            $user->setState($estado);
            $user->setCNum($cNum);
            $user->setStreet($rua);
            $user->setBirthDay($nascimento);

            echo $user->toString();


            
            ?>
        </div>
    </div>
</body>
</html>

<!-- 


metodo construtor - aquele que constroi o objeto

herança - entidade passa os bens para outra (tipo=genes);
objeto (teden - filhos é herdeiros);
a classe filho declara o pai;

atv

petshop

animais:
cachorro 
gato
roedor
tartaruga
galinha 

metodos dos animais;

(

    fomulario cadastro animais;
    10 classe animais;
    instancia;
    metodos do cachorro
)