<?php 

require_once "Classes/Controlador.php";
require_once "Classes/RequisicaoAPI.php";
require_once "Classes/Roteador.php";
require_once "Classes/RequisicaoAPIcurl.php";



$requisicao = (new Requisicao)->verificacao();

$roteador = (new Roteador)->router($requisicao);


