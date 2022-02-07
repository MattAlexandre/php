<?php


if(isset($_POST['submit'])){
    /* conferindo os dados 
    print_r('nome: '.txtName);
    print_r('<br>');

    print_r('email: '.txtEmail);
    print_r('<br>');

    print_r('telefone: '.txtNumber);
    print_r('<br>');
    
    print_r('sexo: '.txtGenre);
    print_r('<br>');

    print_r('data de nascimento: '.txtBirthday);
    print_r('<br>');

    print_r('cidade: '.txtcity);
    print_r('<br>');

    print_r('estado: '.txtState);
    print_r('<br>');

    print_r('esdereço: '.txtAdress);
    print_r('<br>');

    print_r('telefone: '.txtNumber);
    print_r('<br>');
    */

    include_once('config.php');

    $name = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $number = $_POST['txtNumber'];
    $genre = $_POST['txtGenre'];
    $birthday = $_POST['txtBirthday'];
    $city = $_POST['txtCity'];
    $state = $_POST['txtState'];
    $adress = $_POST['txtAdress'];

    $resultado = mysqli($conexao, " INSERT INTO usuarios(nome,email,telefone,genero,data_nasc,cidade,estado,endereco) 
    VALUES ('$name','$email','$number','$genre','$birthday','$City','$state','$adress') ");

}else{

}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title> forulario 02 </title>
</head>
<body>

    <div class="box"> <!-- div form -->
        <form action="config.php" method="POST"> <!--- formulario -->
            
            <fieldset> <!-- topo forms -->
                <legend> <!-- legenda topo -->
                    <strong>formulario de cliente </strong>
                </legend>

                <!-- input Nome -->
                <div class="inputBox">
                    <input type="text" name="txtName" id="name" class="inputUser" required> <!-- input -->
                    <label for="name" class="labelInput"> nome completo </label>                               <!-- name imput -->
                </div> <br><br>

                <!-- input email -->
                <div class="inputBox">
                    <input type="text" name="txtEmail" id="email" class="inputUser" required> 
                    <label for="email" class="labelInput"> email </label>
                </div><br><br>

                <!-- telefone -->
                <div class="inputBox">
                    <input type="tel" name="txtNumber" id="number" class="inputUser" required>
                    <label for="number" class="labelInput"> telefone </label>
                </div><br>

                <p>
                    secho:
                </p>
                <div class="inputbox"> <!-- radius de seleção - genero -->

                    <input type="radio" name="txtGenre" id="masculino" value="masculino" required>
                    <label for="masculino"> Masculinio </label><br><br>

                    <input type="radio" name="txtGenre" id="feminino" value="feminino" required>
                    <label for="feminino"> Feminino </label><br><br>

                    <input type="radio" name="txtGenre" id="outro" value="outro" required>
                    <label for="outro"> Outro </label><br><br>

                </div><br><br>

                <!-- data de nascimento -->
                
                    <label for="txtBirthday" > <strong>Data de nascimento :</strong></label>
                    <input type="date" name="txtBirthday" id="txtBirthday"  required>
                
                <br><br>
                <!-- cidade -->
                <div class="inputBox">
                    <input type="cidade" name="txtCity" id="city" class="inputUser" required>
                    <label for="ciry" class="labelInput"> cidade </label>
                </div><br><br>

                <!-- estado -->
                <div class="inputBox">
                    <input type="text" name="txtState" id="state" class="inputUser" required>
                    <label for="state" class="labelInput"> estado </label>
                </div><br><br>

                <!-- endereço -->
                <div class="inputBox">
                    <input type="text" name="txtAdress" id="adress" class="inputUser" required>
                    <label for="adress" class="labelInput"> telefone </label>
                </div><br><br>

                <!-- button enviar -->
                <input type="button" value="enviar" name="sumbmit" id="submit">

              


            </fieldset>

        </form>
    </div>


    
</body>
</html>