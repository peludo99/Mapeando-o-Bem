<?php

require_once './banco/define.php';

$db_connect = mysqli_connect(HOST, USER, PASS, DB) or die("Erro");

header('Content-Type: application/json');
