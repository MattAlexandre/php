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


    require_once 'classes/ticket.php';
    require_once 'classes/Ticket-vip.php';
    require_once 'classes/Ticket-normal.php';
    require_once 'classes/camarote-inferior.php';
    require_once 'classes/camarote-superior.php';




    $Name = $_POST ['Name'];       //nome
    $Birth = $_POST ['Birth'];     //nascimento
    $Ticket = $_POST ['Ticket'];   //ingresso
    $Value = '200.00';              //valor

    
           
    switch ($Ticket) {
        case 'ingresso-Normal':
            $ticketNormal = new ticketNormal();
            
            $ticketNormal->setName($Name);
            $ticketNormal->setBirth($Birth);
            $ticketNormal->setTicket($Ticket);
            $ticketNormal->setValue($Value);
    
            echo $ticketNormal->toString();
            break;
    
        case 'ingresso-Vip':
            $TicketVip = new TicketVip();
                
            $TicketVip->setName($Name);
            $TicketVip->setBirth($Birth);
            $TicketVip->setTicket($Ticket);
            $TicketVip->setValue($Value);
        
            echo $TicketVip->toString();
            break;

        case 'ingresso-camarote Superior':
            $CabinSup = new CabinSup();
                    
            $CabinSup->setName($Name);
            $CabinSup->setBirth($Birth);
            $CabinSup->setTicket($Ticket);
            $CabinSup->setValue($Value);
            
            echo $CabinSup->toString();
            break;

        case 'ingresso-camarote inferior':
            $CabinInf = new CabinInf();
                        
            $CabinInf->setName($Name);
            $CabinInf->setBirth($Birth);
            $CabinInf->setTicket($Ticket);
            $CabinInf->setValue($Value);
                
            echo $CabinInf->toString();
            break;
    
        }


    //






/*
Crie uma classe chamada Ingresso que possui um valor em reais
 e um m??todo para imprimir o valor.

Crie uma classe VIP, que herda Ingresso e possui um valor adicional. 
Crie um m??todo que retorne o valor do ingresso VIP (com o adicional inclu??do).

Crie uma classe Normal, que herda Ingresso e possui
um m??todo que imprime: "Ingresso Normal".

Crie uma classe Camarote Inferior (que possui a localiza????o do ingresso 
e m??todos para acessar e imprimir esta localiza????o) e uma classe Camarote 
Superior, que ?? mais cara (possui valor adicional). Esta ??ltima possui um 
m??todo para retornar o valor do ingresso. Ambas as classes herdam a classe VIP.

Criar um formul??rio em HTML, onde se deve escolher o ingresso para cadastro e 
informar os dados, que ser??o processados e apresentados na tela.

*/

?>

</body>
</html>