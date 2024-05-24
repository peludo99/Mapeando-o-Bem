<!DOCTYPE html>
<html>

<head>
  <title>Redirecionamento</title>
  <meta http-equiv="refresh" content="3; URL=./views/bem_vindo.php">
  <link rel="stylesheet" href="./views/css/style.css">
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

    .busher-direito {

      width: 100vw;
      height: 100vh;
      position: absolute;
      top: 3px;
      right: -20px;
      overflow: hidden;

    }

    .busher-esquerdo {

      width: 100vw;
      height: 100vh;
      position: absolute;
      top: 0px;
      
      overflow: hidden;

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

  <div class="conteudo-index">

    <img style="margin-top: 15%;width:17%;" src="./views/css/assets/casinhabola.png" class="pulse">



  </div>

  <img class="busher-direito" src="./views/css/assets/busher_index_direito.png" alt="">

  <img src="./views/css/assets/busher_index_superior esquerdo.png" alt="" class="busher-esquerdo">




</body>

</html>