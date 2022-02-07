<?php

//variaveis superglobais - vars disponibilizadas pela linguagens 
echo "<h1>variaveis super_globais</h1> ";

echo"<br><hr>";

//--------------------------------------------------------
echo"<h2> _GLOBALS </h2>";
// armazenas todas as variaveis globais em um array chamado globals

$x = 10;
$y = 15;

function soma(){
   echo $GLOBALS['x'] +  $GLOBALS['y'];
}

soma();

echo"<br><hr>";

//--------------------------------------------------------
echo"<h2> _SERVER </h2>";
// detem informações sobre cabeçalho, caminhos locais de script. - array q detem diversos indices

    echo $_SERVER['PHP_SELF']."<br>"; // retorna o nome do arquivo
    echo $_SERVER['SERVER_NAME']."<br>"; // nome do host do servidor 
    echo $_SERVER['SCRiPT_FILENAME']."<br>"; // retorna o caminho absoluto do arquivo em execução
    echo $_SERVER['DOCUMENT_ROOT']."<br>"; // retorna o diretorio raiz do script
    echo $_SERVER['REMOTE_ADDR']."<br>"; // retorna a endereço ip de onde o usuario esta visualizando a pagina 

echo"<br><hr>";
//--------------------------------------------------------
echo"<h2> _REQUEST</h2>";
// 




echo"<br><hr>";
//--------------------------------------------------------
echo"<h2> _POST </h2>";
// 


echo"<br><hr>";
//--------------------------------------------------------
echo"<h2> _GET </h2>";
// 


echo"<br><hr>";
//--------------------------------------------------------
echo"<h2> _FILES </h2>";
// 


echo"<br><hr>";
//--------------------------------------------------------
echo"<h2> _ENV </h2>";
// 


echo"<br><hr>";
//--------------------------------------------------------
echo"<h2> _COOKIE </h2>";
// 


echo"<br><hr>";
//--------------------------------------------------------
echo"<h2> _SESSION </h2>";
// 


echo"<br><hr>";