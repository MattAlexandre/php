<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ARRAYS </title>
</head>
<body>

    <?php

    //arrays
    echo"<h1> array carros </h1>";
    $carros = ['carro1' =>'corsa','carro2' => 'celta', 'carro3' => 'civic'];
    $carros['carro4'] = 'uno';

    print_r($carros);
    echo"<br>";
    echo $carros ['carro2'];
    echo"<br>";
    echo $carros ['carro4'];

    echo"<h1> array motos </h1>";

    $motos = ["moto1" => "honda","moto2" => "yamaha","moto3" => "suzuki"];
    $motos["moto4"] = "jaguar";

    print_r($motos);
    echo"<br>";
    echo $motos["moto4"];

    echo"<h1> array clientes </h1>";

    $clientes = ["cliente1" =>"joana", "cliente2" => "pedro"];
    $clientes["cliente3"] = "juan";

    print_r($clientes);
    echo"<br>";
    echo $clientes["cliente3"];
    
    echo"<br><hr>";

    //------------------------------------

    //count = exibe a quantidade de elementos que tem no array 

    echo"<h1> count </h1>";

    echo count($carros);
    echo"<br>";
    echo count($motos);

    echo"<br>";

    $totalCLientes = count($clientes);

    echo "são exatos $totalCLientes clientes =} ";

    //------------------------------------------------------

    //foreach = loop pra imprimir array 

    echo"<h1> array - foreach </h1>";

    echo"<h2> array - carros</h2>";

    foreach( $carros as $valor ){  //(cada elemento da var $carros as(atribuição ) vai ser atribuido a var $valor )  - em geral é ultilizado para percorer o array
        echo $valor."<br>";
    }

    echo"<h2> array - motos</h2>";

    foreach($motos as $valor){
        echo $valor."<br>";
    }

    echo"<h2> array - clientes </h2>";

    foreach($clientes as $valor){
        echo $valor."<br>";
    }

    //----------------------------------------------

    //array asociativo = quando os indices do array são strings

    $pessoa = ["Nome" => "juan" , "Idade" => 24 , "Altura" => 1.85,"cidade" => "são paulo"];

    print_r($pessoa);
    echo"<br>";
    echo " eu me chamo ".$pessoa["Nome"].
         " tenho ".$pessoa["Idade"].
         " anos e ".$pessoa["Altura"].
         " de altura =}
           sou de ".$pessoa["cidade"].
         " =} ";

    echo"<BR><br>";

    foreach($pessoa as $indice => $valor){
        echo $indice." : ".$valor."<br>";
    }

    //-----------------------------------------------------
    //array multiDimencionais = array que detem 1 ou mais arrays

    echo "<h1> array - times </h1>";

    $times = [
              "cariocas" => [
                "time1" => "flamego",
                "time2" => "vasco",
                "time3" => "bota fogo"
              ],
              "paulistas" => [
                "time1" => "santos",
                "time2" => "corithians",
                "time3" => "são paulo"
              ],
              "baianos" => [
                "time1" => "bahia",
                "time2" => "vitoria"
              ]
    
              ];

        print_r($times);
        echo"<br><br><br>";

        echo " entre as divições de time os meus favoritos são <br> 
             <li> cariocas : ".$times["cariocas"]["time2"]." e ".$times["cariocas"]["time3"]."
             <br>
             <li> paulistas : ".$times["paulistas"]["time1"]." e ".$times["paulistas"]["time3"]."
             <br> 
             <li> baianos : "  .$times["baianos"]["time1"]." e ".$times["baianos"]["time2"]." =}  <br><br> <hr> "
             ;

    
        echo "<li> times paulistas <br>";
        foreach($times["paulistas"] as $indice => $valor){
            echo $indice." : ".$valor."<br>";
        }

        echo"<br><br>";

        echo "<li> times cariocas <br>";
        foreach($times["cariocas"] as $indice => $valor){
            echo $indice." : ".$valor."<br>";
        }

        echo"<br><br>";

        echo "<li> times baianos <br>";
        foreach($times["baianos"] as $indice => $valor){
            echo $indice." : ".$valor."<br>";
        }




    

    
    
    
    
    
    
    ?>
    
</body>
</html>