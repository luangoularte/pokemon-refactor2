<?php 

require_once "Classes/Controlador.php";
require_once "Classes/RequisicaoAPI.php";
require_once "Classes/Roteador.php";
require_once "Classes/RequisicaoAPIcurl.php";


$method = $_SERVER['REQUEST_METHOD'];
$route = $_SERVER['REQUEST_URI'];
//$requisicao = (new RequisicaoAPI)->verificacao();

$roteador = (new Roteador)->router($route);


