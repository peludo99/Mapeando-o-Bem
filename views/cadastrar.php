<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/6cb3083259.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="./css/assets/icone.ico" type="image/x-icon">
  <title>Cadrastre-se</title>
  <style>
    .btn-entrarnaconta {

      font-weight: bold;

      background-color: #ffffff00;
      border-radius: 10px;
      height: 40px;
      width: 150px;
      border: 1px solid rgb(59, 3, 50);
      color: rgb(255, 255, 255)
    }

    .btn-entrarnaconta:hover {
      background-color: rgb(59, 3, 50);
    }

    .btn-cadastrar {

      font-weight: bold;
      border: 1px solid rgb(59, 3, 50);
      color: rgb(204, 50, 171);
      background-color: #ffffff00;
      border-radius: 10px;
      height: 40px;

    }

    .btn-cadastrar:hover {
      background-color: rgb(59, 3, 50);
    }

    #Idcadastrob{
      display: none;
    }



    .botoescadastro {
      display: flex;
      justify-content: center;
    }

    .btn-cadastrar {

      width: 97px;

    }

    @media(max-width: 800px) {

      #Idcadastrob{
        display: block;
      }
    }
  </style>

  <!-- ARQUIVO DE LOGIN  -->
</head>

<body class="cadastrar-js">

  <?php
  // AREA PHP
  require_once '../controllers/funcoes.php';


  // Mesclar Funcoes de conexao.php


  ?>

  <!-- AREA HTML -->

  <div class="containerlog">
    <div class="conteudo conteudo-um">
      <div class="coluna-um">
        <img src="css/assets/casinhabola.png" alt="bola">
        <h2 class="titulo-bem">
          Bem-vindo de volta!
        </h2>
        <p class="descricao">Conecte-se conosco</p>

        <form action="login.php" method="post">
          <button class="btn-entrarnaconta">Entrar na conta</button>
        </form>
      </div>
      <div class="coluna-dois">
        <img src="css/assets/logomob.png" alt="logo">
        <h2 class="titulo-cad">Criar conta</h2>
        <div class="redes-sociais">
          <ul class="rede-social-list">
            <li class="item-rede"><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
            <li class="item-rede"><a href="#"><i class="fa-brands fa-google"></i></a></li>
            <li class="item-rede"><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
          </ul>
        </div>
        <!-- redes -->
        <p class="descricao descricao-um">Ou utilize seu e-mail para o cadastro</p>
        <form action="cadastrar.php" method="post" class="forms">
          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-user"></i></span>
            <input required type="text" name="nome_usuario" class="form-control" placeholder="Nome" aria-label="nome" aria-describedby="addon-wrapping">

          </div>
          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-envelope"></i></span>
            <input required type="text" name="email_usuario" class="form-control" placeholder="Email" aria-label="email" aria-describedby="addon-wrapping">
          </div>
          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-lock"></i></span>
            <input required type="password" name="senha_usuario" class="form-control" placeholder="Senha" aria-label="senha" aria-describedby="addon-wrapping">
          </div>
          <br>
          <div class="botoescadastro">
            <div><input type="submit" class="btn-cadastrar" value="Cadastrar"></div>
            <div><a href="./login.php" id="Idcadastrob" style="border: 1px solid rgb(238, 84, 204);margin-left:5px; color:rgb(255, 255, 255); background-color: rgb(238, 38, 38);" class="btn btn-outline-primary">voltar</a></div>
          </div>

        </form>
        <?php
        if (isset($_POST["email_usuario"])) {
          $nick = addslashes($_POST['nome_usuario']);
          $email = addslashes($_POST['email_usuario']);
          $senha = addslashes($_POST['senha_usuario']);

          if (!empty($nick) && !empty($email) && !empty($senha)) {
            if (CadastrarUsuarios($nick, $email, $senha));
          } else {
            Mensagem("OPS!, É necessario preencher todos os campos!", "danger");
          }
        }
        ?>
      </div>
    </div>

    <?php
    if (isset($_POST["email"])) {
      $pesquisar = $_POST["email"];
      $resultado = $p->Buscardadosdecadastro($pesquisar);
      if (count($resultado) > 0) {
      } else {
        Mensagem("OPS!, Você Não possui uma conta!", "danger");
      }
    }
    ?>

    <!-- coluna dois -->
  </div>


  <script src="js/tela_login.js"></script>



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