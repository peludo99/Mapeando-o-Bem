<?php

session_start();
$nome_usuario = $_SESSION['email'];
$id_user = $_SESSION['id'];


require_once 'funcoes.php';

if (isset($_POST['imagem'])) {
    $dadosImagemBase64 = $_POST['imagem'];
    $texto = $_POST['texto'];

    AdicionarImagem($dadosImagemBase64,$nome_usuario,$texto);
} else {
    echo "<h1>Dados não chegou</h1>";
}
