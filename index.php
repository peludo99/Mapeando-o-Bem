<!DOCTYPE html>
<html>

<head>
  <title>Redirecionamento</title>
  <meta http-equiv="refresh" content="3; URL=./views/bem_vindo.php">
  <link rel="stylesheet" href="..viwes/css/style.css">
  <script src="https://kit.fontawesome.com/6cb3083259.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="..views/css/bootstrap.min.css">

  <style>

    /* IMAGEM DE CARREGAMENTO PULSANDO */
    .pulse {
      animation: pulse 0.7s infinite;
      margin: 0 auto;
      display: table;
      margin-top: 50px;
      animation-direction: alternate;
      -webkit-animation-name: pulse;
      animation-name: pulse;
    }

    @-webkit-keyframes pulse {
      0% {
        -webkit-transform: scale(1);
        -webkit-filter: brightness(100%);
      }

      100% {
        -webkit-transform: scale(1.1);
        -webkit-filter: brightness(200%);
      }
    }

    @keyframes pulse {
      0% {
        transform: scale(1);
        filter: brightness(100%);
      }

      100% {
        transform: scale(1.1);
        filter: brightness(200%);
      }
    }
    /* ---------------------------------------- */


  </style>



</head>

<body>
  
  <p>Aguarde, você será redirecionado...</p>

  <div class="carregando">
  <i class="fa-solid fa-circle-notch fa-spin fa-4x" style="color: #27232625;"></i>
  </div>
  <img style="margin-top: 15%;width:17%;" src="./css/assets/casinhabola.png" class="pulse">




</body>

</html>