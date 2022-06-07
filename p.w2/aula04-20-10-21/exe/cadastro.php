<?php


echo ' info-cadastro '

echo $_POST['nome'];                            
echo '<br>'
echo $_POST['email'];
echo '<br>'
echo $_POST['celular'];
echo '<br>'
echo $_POST['senha'];
echo '<br>'
echo $_POST['data de nascimento'];
echo '<br>'
echo $_POST['email'];

echo ' endereço '

echo '<br>'
echo $_POST['cep'];
echo '<br>'
echo $_POST['logradouro'];
echo '<br>'
echo $_POST['numero'];
echo '<br>'
echo $_POST['cidade'];
echo '<br>'
echo $_POST['estado'];


$idade;

$idade = $_POST['data de nascimento'] - 2021 ;
echo ' vossa beldade detem '. $idade . ' anos =} ';
