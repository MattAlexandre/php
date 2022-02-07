<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color:cyan;
        }
        h1{
            color:black;
        }
        h2{
            color:red;
        }
    </style>
    <title> tipos de dados </title>
</head>
<body>
    <?php

    echo"<h1> tipos de dados: </h1>";

    /*-------------------------------------------------------*/
    echo"<h2><li> escalares </h2>";
    echo"<hr>";

    //------------------------------------------------------------
    echo"<h3> string = sequencia de caracteres</h3>";

    $nome = " Paulin Bacana ";

    var_dump($nome);// var_dump = mostra as informações da variavel 
    echo"<br>";
    if(is_string($nome)){ // is_string = se a var é string, verificar se $nome e string 
        echo" é uma string ";
    }else{
        echo" não é uma string ";
    }

    echo"<hr>";
    
    //------------------------------------------------------------
    echo"<h3> int = numeros inteiros </h3>";

    $idade = 27;

    var_dump($idade);
    echo"<br>";
    if(is_int($idade)){ // is_int = se a var é int, verificar se $idade e int 
        echo" é um numero inteiro ";
    }else{ 
        echo" não é um numero inteiro ";
    }

    echo"<hr>";
   // ----------------------------------------------------------------------
   echo"<h3> float = numeros reais </h3>";

    $altura = 1.70;

    var_dump($altura);
    echo"<br>";
    if(is_float($altura)){ // is_float = se a var é float, varifica se $altura é real
        echo" é um numero real ";
    }else{
        echo" não é um numero real ";
    }

    echo"<hr>";
    // ----------------------------------------------------------------------
   echo"<h3> boolean = true or false </h3>";

   $admin = false;

   var_dump($admin);
   echo"<br>";
   if(is_bool($admin)){ // is_bool = se a var é booleano, varifica se $admin é true or false
        echo" é um buleano ";
    }else{
        echo" não é um buleano";
    }

   echo"<hr>";

   /*-------------------------------------------------------*/
   echo"<h2><li> compostos </h2>";
   echo"<hr>";

   //---------------------------------------------------------
   echo"<h3> array = </h3>";

   $carros = ["nissan","pegout","honda",123,12.5,true];

   var_dump($carros);
   echo"<br>";

   if(is_array($carros)){// is_array = se a var é array, varifica se $carros é um array
       echo" é um array!";
   }else{
       echo" não é um array!";
   }


   echo"<hr>";

   //-------------------------------------------------------
   echo"<h3> object </h3>";

   class Cliente
   {
        private $nome;

        public function atribuirNome($nome){
            return $this->$nome = $nome ;
        }

   }

   $cliente = new Cliente();
   $cliente->atribuirNome("juan");
   var_dump($cliente);
   echo"<br>";

   if(is_object($cliente)){ // is_object = se a var é object, varifica se $cliente é um object
        echo" é um object";
    }else{
        echo" não é um object!";
   }
   echo"<hr>";

   /*-------------------------------------------------------*/
   echo"<h2><li> especiais </h2>";
   echo"<hr>";

   //-------------------------------------------------------
   echo"<h3> null </h3>";

   $cidade = null;
   var_dump($cidade);

   echo"<hr>";

   //-------------------------------------------------------
   echo"<h3> resource </h3>";

   echo" conexões externas, banco e etc..";









    
    
    
    
    
    ?>
    
</body>
</html>