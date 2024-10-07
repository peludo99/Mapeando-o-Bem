<?php


define('HOST', 'localhost');
define('PASS', '');
define('USER', 'root');
define('DB', 'test');


$db_connect = mysqli_connect(HOST, USER, PASS, DB) or die("Erro");

header('Content-Type: application/json');
