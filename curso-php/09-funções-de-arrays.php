<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> funções de arrays </title>
</head>
<body>

    <?php

    //funções array

    echo"<h1> funções array  </h1>";

    echo"<h2> is_array  </h2>";
    // is_array($array) = verifica se determinada variavel é um array 

    $nomes = ["nome1" => "rodrigo", "nome2" => "felipe", "nome3" => "maria"];

    echo is_array($nomes);
    echo"<br>";
    var_dump(is_array($nomes));
    echo"<br>";

    if(is_array($nomes)){
        echo"é um array";
    }else{
        echo" não é um array";
    }

    echo"<br><hr>";
    //--------------------------------------------------------

    echo"<h2> in_array  </h2>";
    // in_array($valor , $array) = verifica se determinado valor existe em alguma posição   do array

    echo in_array("felipe",$nomes);

    echo"<br>";

    if(in_array("maria",$nomes)){
        echo" maria esta no array";
    }else{
        echo" maria não esta no array";
    }

    echo"<br><hr>";
    //--------------------------------------------------------

    echo"<h2> array_keys  </h2>";
    // arry_keys($array)  = faz que os indice do array selecionado se tornen os valores do array _keys()

    $keys = array_keys($nomes);
    print_r($keys);


    echo"<br><hr>";
    //--------------------------------------------------------

    echo"<h2> array_values  </h2>";
    // array_valus($array) = retorna um novo array com os calores do array passado como parametro

    $values = array_values($nomes);

    print_r($values); //retorna os valores do array $nomes


    echo"<br><hr>";
    //--------------------------------------------------------

    echo"<h2> array_merge  </h2>";
    // array_merge($array) = agrega o conteudo de dois arrays

    $carros = ["carro1" => "corso" , "carro2" => "celta","carro3" => "uno" , "carro4" => "polo"];

    $motos = ["moto1" => "honda" , "moto2" => "jaguar" , "moto3" => "yamaha"];

    $auto_moveis = array_merge($carros,$motos);

    print_r($auto_moveis);


    echo"<br><hr>";
    //--------------------------------------------------------

    echo"<h2> array - pop  </h2>";
    // array_pop($array) = exclui a ultima posição do array

    print_r($carros);
    array_pop($carros);
    echo"<br>";
    print_r($carros);
    echo"<br>";
    echo array_pop($carros); // exibe o elemento excluido


    echo"<br><hr>";
    //--------------------------------------------------------

    echo"<h2> array shift  </h2>";
    // array_shift($array) = exclui a primeira posição do array 

    print_r($carros);
    array_shift($carros);
    echo"<br>";
    print_r($carros);
    echo"<br>";
    echo array_shift($carros); // exibe o elemento excluido

    echo"<br><hr>";
    //--------------------------------------------------------

    echo"<h2> array unshift  </h2>";
    // array_unshift($arr ,"valor") = adiciona  um ou mais elementos no inciodo array

    $frutas = ["fruta1" => "uva","fruta2" => "laranja","fruta3" => "pesego"];
    print_r($frutas);

    array_unshift($frutas , "goiaba","cereja","banana");
    print_r($frutas);



    echo"<br><hr>";
    //--------------------------------------------------------

    echo"<h2> array push  </h2>";
    // array_push($array , "valor", "valor") = adiciona um ou mais elementos no final do array 

    array_push($frutas , "goiaba","cereja","banana");
    print_r($frutas);



    echo"<br><hr>";
    //--------------------------------------------------------

    echo"<h2> array combine </h2>";
    // array_combine($keys , $values) = mescla os 2 arrays passados

    $keys2 = ["campeão","vice","terçeiro"];
    $values2 = ["vasco","cruzeiro","são paulo"];

    $times = array_combine($keys , $values2);



    echo"<br><hr>";
    //--------------------------------------------------------

    echo"<h2> array sum  </h2>";
    // array_sum($array) = calcula a soma dos elementos string em array


    echo"<br><hr>";
    //--------------------------------------------------------

    echo"<h2> explode </h2>";
    // explode ("/" , "20-01-2022") = transforma string em array 

    echo"<br><hr>";
    //--------------------------------------------------------

    echo"<h2> implode  </h2>";
    //  implode("-",$arr) =  transforma array em string













 
 
 
 
    ?> 
    
</body>
</html>