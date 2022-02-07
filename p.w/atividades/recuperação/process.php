<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/process.css">
    <title> process </title>
</head>
<body>

<?php


require_once'employee.php';

    $Name = $_POST['Name'];
    $Surname = $_POST['Surname'];
    $MonthlySalary = $_POST['MonthlySalary'];


    $Employee = new Employee($Name,$Surname,$MonthlySalary);

    $Employee->setName($Name);
    $Employee->setSurname($Surname);
    $Employee->setMonthlySalary($MonthlySalary);
    $Employee->raiseSalary();
    echo $Employee->toString();




/*

A fim de representar empregados em uma firma, crie uma classe chamada Employee (Empregado)
 que inclui as três informações a seguir como atributos:

um primeiro nome
um sobrenome
um salário mensal.
Sua classe deve ter um construtor que inicializa os três atributos.
 Forneça um método set e get para cada atributo. Se o salário mensal 
 não for positivo, configure-o como 0.0. Crie um método que exibe o salário
  anual e um que dê 10% de aumento no salário. Crie uma tela com um formulário 
  para cadastro desse funcionário, que ao ser executado envia as informações para 
  um arquivo PHP. Por fim, apresente os dados do funcionário e dê o aumento de 10% ao salário.
*/


?>

</body>
</html>


