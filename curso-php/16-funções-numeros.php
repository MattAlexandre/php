<?php


//funções numbers 
echo"funções numbers";

echo"<br><hr>";
    //--------------------------------------------------------
    echo"<h2> number_format </h2>";
    // especificador num, (var, casas decimais,"separador") 

    $bd = 1234.56;
    $preco = number_format($bd, 2, "." , ",");
    echo " o valor do produto é $preco ";

  

    echo"<br><hr>";
    //--------------------------------------------------------
    echo"<h2> round </h2>";
    // aredonda valores

    round(37.6);

  

    echo"<br><hr>";
     //--------------------------------------------------------
     echo"<h2> ceil </h2>";
     // eredonda valores (aredonda pra cima)

     ceil(52.2)
 
   
 
     echo"<br><hr>";
      //--------------------------------------------------------
    echo"<h2> floor </h2>";
    // aredonda valores (aredonda sempre pra baixo)

    floor(56.9)


    echo"<br><hr>";
     //--------------------------------------------------------
     echo"<h2> rand </h2>";
     // sorteio, gera valores aleatorios apartir dos parametros passados

     rand(1,25)
 
   
 
     echo"<br><hr>";
    
    
