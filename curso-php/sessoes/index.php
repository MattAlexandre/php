<?php

/*
    ultilizadas para armazenar informações , e poderam ser ultiliadas em varias paginas 
*/

session_start();

$_SESSION['cor'] = "verde";
$_SESSION['carro'] = "honda";

echo $_SESSION['cor']. " <br> " . $_SESSION['carro'] . "<br>" . session_id();