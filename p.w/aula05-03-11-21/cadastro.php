<?php

$nome = $_GET['nome'];
$email = $_GET['email'];
$celular = $_GET['celular'];
$senha = $_GET['senha'];
$nascimento = $_GET['nascimento'];
$cep = $_GET['cep'];
$logradouro = $_GET['logradouro'];
$numeroEndereco = $_GET['numero_endereco'];
$cidade = $_GET['cidade'];
$estado= $_GET['estado'];


echo '<h1>Dados do usuário</h1>';
echo 'Nome: ',      $nome . '<br>';
echo 'E-mail: ',    $email . '<br>';
echo 'Celular: ',   $celular . '<br>';
echo 'Senha: ',      $senha . '<br>';
echo 'Data de nascimento: ',    $nascimento . '<br>';
echo 'CEP: ',    $cep . '<br>';
echo 'Logradouro: ',    $logradouro . '<br>';
echo 'Numero do Endereço: ',     $numeroEndereco . '<br>';
echo 'Cidade: ',     $cidade . '<br>';  
echo 'Estado: ',    $estado . '<br>';


     /*calculo da idade de nacimento */

     
$nascimentoDateTime = new DateTime($nascimento);
$DataAtual = new DateTime(); 

$intervalo = $nascimentoDateTime->diff($DataAtual);

echo 'Idade' . $intervalo->y;




//baby steps ( pequenos passos )/

?>