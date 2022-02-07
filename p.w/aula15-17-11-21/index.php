<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegar dados</title>
</head>
<body>

    <form method="POST" action="process.php">
        <a>Nome:</a><br>
        <input type="text" name="nome" placeholder="Nome..."><br><br>

        <a>Email:</a><br>
        <input type="text" name="email" placeholder="E-mail..."><br><br>

        <a>Celular:</a><br>
        <input type="text" name="tel" placeholder="Telefone..."><br><br>

        <a>Data de Nascimento:</a><br>

        <!-- Data aniversario -->
        <select id="dia" name="dia">
            <option translate="BIRTHDATE_YEAR" value>Dia</option>
            
                <?php
                
                    for($d = 1; $d < 32; $d++ ){
                            echo '<option value=' . "'" . $d . "'" . '>' . $d .  '</option>';
                       
                    }
                ?>
        </select>

        <select id="mes" name="mes">
            <option  value="">Mês</option>
            <option value="01">Janeiro</option>
            <option value="02">Fevereiro</option>
            <option value="03">Março</option>
            <option value="04">Abril</option>
            <option value="05">Maio</option>
            <option value="06">Junho</option>
            <option value="07">Julho</option>
            <option value="08">Agosto</option>
            <option value="09">Setembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Dezembro</option>
            
        </select>
        
        <select id="ano"name="ano">
            <option translate="YEAR" value>Ano</option>
            <?php

                for($a = 2021; $a > 1800; $a-- ){
                    echo '<option value=' . "'" . $a . "'" . '>' . $a .  '</option>';  
                }
                
            ?>
        </select>
            <br><br>


        <!-- Gênero -->

        <a>Sexo:</a>

        <select id="sexo" name="sexo">
            <option  class="sexo_escolha">Sexo</option>
            <option  value="Masculino">Masculino</option>
            <option  value="Feminino">Feminino</option>
            <option  value="Outro">Outro</option>
        </select><br><br>

        <!-- Localização -->
        <a>Rua:</a>
        <input type="text" name="rua" placeholder="Nome da Rua..."><br><br>

        
        <a>Estado:</a>
        <input type="text" name="estado" placeholder="Estado onde vive...">

        <a>CEP:</a>
        <input type="text" name="cep" placeholder="CEP...">


        <a>C. Numero:</a>
        <input type="text" name="cNum" placeholder="Número da casa...">

        <input type="submit" value="Ok" >
    </form>
</body>
</html>