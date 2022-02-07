<?php

$tabuada = 3;

for($i = 1; $i <= 10; $i++){
    echo "  $i x $tabuada = ".$i * $tabuada."<br>";
}

echo "<br><hr>";

$cores = ["cor1" => "cyan","cor2" => "black","cor3" => "yellow"];

foreach($cores as $indice => $value){
    echo $indice. " : " .$value."<br>";
}