<!DOCTYPE html>
<html>

<head>
  <title>Redirecionamento</title>
  <meta http-equiv="refresh" content="6; URL=./views/bem_vindo.php">
  <link rel="stylesheet" href="./views/css/style.css">
  <script src="https://kit.fontawesome.com/6cb3083259.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="..views/css/bootstrap.min.css">
  <link rel="shortcut icon" href="./views/css/assets/icone.ico" type="image/x-icon">

  <style>
    /* IMAGEM DE CARREGAMENTO PULSANDO */

    .pulse {
      animation: pulse 0.9s infinite;
      margin: 0 auto;
      display: table;
      animation-direction: alternate;
      -webkit-animation-name: pulse;
      animation-name: pulse;
    }

    #casa {
      width: 25%;

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

    @import url('https://fonts.googleapis.com/css?family=Poppins:700');

    body {
      margin: 0;
      padding: 0;
      width: 100vw;
      height: 100vh;
      overflow: hidden;
      position: relative;
      background: #FFD1F1;

      display: flex;
      align-items: center;
    }

    h1 {
      color: white;
      font-size: 20vmin;
      line-height: 1;
      font-weight: bold;
      letter-spacing: 2px;
      font-family: 'Poppins', sans-serif;
      text-transform: uppercase;
      padding-left: 40px;
    }

    .blob {
      position: absolute;
      top: 0;
      left: 0;
      fill: #FFC4ED;
      width: 80vmax;
      z-index: -1;
      animation: move 10s ease-in-out infinite;
      transform-origin: 30% 10%;
    }

    .blob2 {
      position: absolute;
      top: 0;
      left: 0;
      fill: #FFB3E8;
      width: 80vmax;
      z-index: -1;
      animation: move 9s ease-in-out infinite;
      transform-origin: 70% 10%;
    }

    .blob3 {
      position: absolute;
      top: 0;
      left: 0;
      fill: #FF9BE0;
      width: 40vmax;
      z-index: -1;
      animation: move 7s ease-in-out infinite;
      transform-origin: 10% 70%;
    }

    @keyframes move {
      0% {
        transform: scale(1) translate(10px, -30px);
      }

      38% {
        transform: scale(0.8, 1) translate(80vw, 30vh) rotate(160deg);
      }

      40% {
        transform: scale(0.8, 1) translate(80vw, 30vh) rotate(160deg);
      }

      78% {
        transform: scale(1.3) translate(0vw, 50vh) rotate(-20deg);
      }

      80% {
        transform: scale(1.3) translate(0vw, 50vh) rotate(-20deg);
      }

      100% {
        transform: scale(1) translate(10px, -30px);
      }
    }
  </style>



</head>

<body>

  <img src="./views/css/assets/casinhabola.png" class="pulse" id="casa">

  
  <div class="blob2">
    <!-- This SVG is from https://codepen.io/Ali_Farooq_/pen/gKOJqx -->
    <svg xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 350">
      <path d="M156.4,339.5c31.8-2.5,59.4-26.8,80.2-48.5c28.3-29.5,40.5-47,56.1-85.1c14-34.3,20.7-75.6,2.3-111  c-18.1-34.8-55.7-58-90.4-72.3c-11.7-4.8-24.1-8.8-36.8-11.5l-0.9-0.9l-0.6,0.6c-27.7-5.8-56.6-6-82.4,3c-38.8,13.6-64,48.8-66.8,90.3c-3,43.9,17.8,88.3,33.7,128.8c5.3,13.5,10.4,27.1,14.9,40.9C77.5,309.9,111,343,156.4,339.5z" />
    </svg>
  </div>
  
  <div class="blob">
    <!-- This SVG is from https://codepen.io/Ali_Farooq_/pen/gKOJqx -->
    <svg xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 350">
      <path d="M156.4,339.5c31.8-2.5,59.4-26.8,80.2-48.5c28.3-29.5,40.5-47,56.1-85.1c14-34.3,20.7-75.6,2.3-111  c-18.1-34.8-55.7-58-90.4-72.3c-11.7-4.8-24.1-8.8-36.8-11.5l-0.9-0.9l-0.6,0.6c-27.7-5.8-56.6-6-82.4,3c-38.8,13.6-64,48.8-66.8,90.3c-3,43.9,17.8,88.3,33.7,128.8c5.3,13.5,10.4,27.1,14.9,40.9C77.5,309.9,111,343,156.4,339.5z" />
    </svg>
  </div>

  <div class="blob3">
    <!-- This SVG is from https://codepen.io/Ali_Farooq_/pen/gKOJqx -->
    <svg xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 350">
      <path d="M156.4,339.5c31.8-2.5,59.4-26.8,80.2-48.5c28.3-29.5,40.5-47,56.1-85.1c14-34.3,20.7-75.6,2.3-111  c-18.1-34.8-55.7-58-90.4-72.3c-11.7-4.8-24.1-8.8-36.8-11.5l-0.9-0.9l-0.6,0.6c-27.7-5.8-56.6-6-82.4,3c-38.8,13.6-64,48.8-66.8,90.3c-3,43.9,17.8,88.3,33.7,128.8c5.3,13.5,10.4,27.1,14.9,40.9C77.5,309.9,111,343,156.4,339.5z" />
    </svg>
  </div>



</body>

</html>