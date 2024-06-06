<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // ... seu código para processar a imagem

  if (isset($_FILES['arquivo'])) {
    // O arquivo foi enviado
    $arquivo = $_FILES['arquivo'];
    echo'foi';
  } else {
    // Nenhum arquivo foi enviado
    echo "Nenhum arquivo enviado.";
    exit; // Pare a execução do script
  }


} else {
  echo "Método de requisição inválido.";
}

?>