<?php


$pasta_atual = __DIR__;
$pasta_raiz = dirname(dirname($pasta_atual));
require_once "$pasta_raiz"."\banco\define.php";


$db_connect = mysqli_connect(HOST, USER, PASS, DB) or die("Erro");

header('Content-Type: application/json');
