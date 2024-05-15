<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../views/css/style.css">
  <link rel="stylesheet" href="../views/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/6cb3083259.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="../views/css/assets/favicon.ico" type="image/x-icon">
  <title>Tela Inicial</title>

  <style>
    h1 {
      font-size: 50px;
      color: #fafdff;
      color: rgb(70, 7, 88);

    }

    h2 {
      font-size: 25px;
      color: #fafdff;
      margin-right: 40%;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      color: rgb(100, 8, 80);
    }

    .btn-outline-primary {
      background-color: rgb(238, 84, 204);

    }

    .btn-outline-primary:hover,.btn-outline-primary:active {

      background-color: rgb(145, 7, 122);



    }


  </style>

</head>

<body>






  <div class="navega">

    <!-- Barra de Navegação -->

    <nav style="background: rgb(219 164 234)" class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

          <a class="navbar-brand" href="/tela_inicial.php"><img src="./css/assets/mob.png" width="60" height="30" class="d-inline-block align-top" alt="" class="nav-item"> Mapeando o Bem</a>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!--Itens da Barra de Navegação -->
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Quem somos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true">Redes Sociais</a>


              <div style="width: 180px;text-align: center;border-color: rgba(179, 112, 167, 0);background:rgb(219 164 234)" class="dropdown-menu">
                <a style="background:rgba(202, 46, 176, 0); margin:auto" class="dropdown-item" href="https://www.instagram.com/mapeandoobem/" target="_blank"><i style="font-size: 22px;" class="fa-brands fa-instagram fa-fade">
                    <nome style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size:20px"> Instagram</nome>
                  </i></a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Contribua <i class="fa-solid fa-hand-holding-heart"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


  </div>
  <div class="container-bem-vindo">
    <div class="base">

      <div class="item-um">
        <div class="elementos-item-um">
          <div>
            <h1>
              <strong>Seja um Voluntário!</strong>
            </h1>
          </div>
          <br>
          <div>
            <h2>
              Com um click de distância, encontre a casa de apoio mais próxima de você. <br>
            </h2>
          </div>
          <div>
            <form action="./login.php" method="post">
              <button type="post" id="Idcadastro" style="font-weight:bold;border: 1px solid rgb(238, 84, 204);width:400px; color:rgb(255, 255, 255);margin-top: 2%;" class="btn btn-outline-primary">Acessar</button>

              <!-- background-color:rgb(238, 84, 204); -->
            </form>
          </div>
        </div>
      </div>
      <div class="item-dois">

        <img src="./css/assets/bg_pessoa.png" alt="">
      </div>
    </div>


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