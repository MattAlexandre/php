<?php


function exibirName($name){
    echo" my name is $name ";
}
exibirName("matue");

echo"<br><hr>";

function media($nome, $num1, $num2, $num3){
    $media = ( ($num1 + $num2 + $num3 ) / 3 );
    
    if( $media > 4 ){
        echo "aprovado! , congratilations $nome, vossa media foi $media =) ";
    }else{
        echo "reprovado! , sorry $nome, vossa media foi $media =( ";
    }

}

media("matue",9,8,7);
echo"<br>";
media("ana",4,5,2);