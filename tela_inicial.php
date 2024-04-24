<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./teste.css">
  <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
  <title>Tela Inicial</title>

      <!-- Barra de Navegação -->

    <nav class="navbar navbar-expand-lg bg-success-subtle">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <!-- <a class="navbar-brand" href="./tela_inicial.php"><img src="assets/mob.png" alt="Bootstrap" width="100" height="94"></a> -->
          <a class="navbar-brand" href="/tela_inicial.php"><img src="assets/favicon.ico" width="30" height="30" class="d-inline-block align-top" alt="" class= "nav-item">Mapeando o Bem</a>    
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"> <!-- Itens da Barra de Navegação -->
              <a class="nav-link" aria-current="page" href="#">Quem somos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Redes Sociais</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Instagram</a>
              </div>
            </li> 
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Contribua</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

</head>

  <style>
    body {
      background-image: url('./assets/bg_pessoas.png'), url('assets/circulo.png'), url('./assets/fundocolorido.jpg');
      font-family: Verdana, Geneva, Tahoma, sans-serif;

      background-size: 1500px, 1300px, 1380px;
      background-position-x: right, 650px, center;
      background-position-y: 1px, 1px, 0%;


      background-repeat: no-repeat;
    }
  </style>
</head>

<body>

  <div class="container-tela">
    <table>
      <tr>
        <h1 style="font-size: 50px; color: #fafdff; color:rgb(70, 7, 88)"><strong>Seja um Voluntário!</strong></h1>
        <br>
      </tr>
      <tr>
        <h2 style="font-size: 25px; color: #fafdff; margin-right: 40%; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;color: rgb(100, 8, 80) ">
          Com um click de distância, encontre a casa de apoio mais próxima de você.
          <h2>

      </tr>

      <br>
      <tr>


        <form action="./login.php" method="post">
          <button type="submit" class="btn btn-primary" style="width: 500px; background:rgb(238, 84, 204); border:palevioletred">acessar</button>
        </form>
      </tr>



      </tr>
    </table>
  </div>


</body>

</html>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>