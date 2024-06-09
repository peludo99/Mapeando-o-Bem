<?php


require_once '../controllers/funcoes.php';


// INSTANCIA DA CLASSE PESSOA COM CONSTRUTORES (BANCO DE DADOS, HOST, USUARIO DO BANCO, SENHA)
if (isset($_POST["email"]) and isset($_POST["senha"])) {
  // VERIFICA SE O FORMULARIO DA LINHA +-71 ESTA RETORNADO ALGO
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $resultado = array();
  // CHAMA A FUNÇÃO BUSCARDADOS(RETORNA UM ARRAY) COM PARAMETRO $pesquisar
  $resultado = Buscardadosdelogin($email, $senha);

  // ADICIONA O VALOR DE $P->BUSCARDADOS A VARIAVEL $resultado  
  if (count($resultado) > 0) {
    // VERIFICA SE $resultado RETORNOU ALGO COM A FUNÇÃO COUNT
    $usuario = $resultado[0];
    $user = array();
    foreach ($usuario as $nome) {
      $user[] = $nome;
    };



    session_start();

    $_SESSION['user'] = $user[0];
    $_SESSION['email'] = $user[1];
    $_SESSION['senha'] = $user[2];
    $_SESSION['id'] = $user[8];
    $_SESSION['permissoes'] = $user[7];
    header("Location: tela_inicial.php");
  }
}

?>


<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/6cb3083259.js" crossorigin="anonymous"></script>

  <title>Mapeando o Bem</title>
  <style>
    .btn-cadastrar {

      font-weight: bold;

      background-color: #ffffff00;
      border-radius: 10px;
      height: 40px;
      width: 150px;
      border: 1px solid rgb(59, 3, 50);
      color: rgb(255, 255, 255)
    }

    .btn-cadastrar:hover {
      background-color: rgb(59, 3, 50);
    }



    .btn-logar {

      font-weight: bold;
      border: 1px solid rgb(59, 3, 50);
      color: rgb(204, 50, 171);
      background-color: #ffffff00;
      border-radius: 10px;
      height: 40px;

    }

    .btn-logar:hover {
      background-color: rgb(59, 3, 50);
    }
  </style>

  <!-- ARQUIVO DE LOGIN  -->
</head>

<body class="logar-js">
  <div class="containerlog">
    <!-- coluna dois -->
    <div class="conteudo conteudo-dois">
      <div class="coluna-um">
        <img src="css/assets/casinhabola.png" alt="bola">
        <h2 class="titulo-bem">Seja bem-vindo
        </h2>
        <p class="descricao">Não possui conta?</p>
        <form action="cadastrar.php" method="post">
          <button type="post" id="Idcadastro" class="btn-cadastrar">Cadastrar-se</button>
        </form>
      </div>
      <div class="coluna-dois">
        <img src="css/assets/logomob.png" alt="logo">
        <h2 class="titulo-cad">Acesse Sua conta</h2>
        <div class="redes-sociais">
          <ul class="rede-social-list">
            <li class="item-rede"><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
            <li class="item-rede"><a href="#"><i class="fa-brands fa-google"></i></a></li>
            <li class="item-rede"><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
          </ul>
        </div>
        <!-- redes -->
        <p class="descricao descricao-um">ou utilize seu e-mail</p>
        <form action="" method="post" class="forms">
          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-envelope"></i></span>
            <input type="text" name="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="addon-wrapping" required>
          </div>
          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-lock"></i></span>
            <input type="password" name="senha" class="form-control" placeholder="Senha" aria-label="senha" aria-describedby="addon-wrapping">
          </div>
          <br>

          <a class="senha" href="#">Esqueceu a senha?</a>
          <br>

          <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
          </fb:login-button>


          <input type="submit" class="btn-logar" value="Logar">
          <br>



        </form>
        <?php
        // INSTANCIA DA CLASSE PESSOA COM CONSTRUTORES (BANCO DE DADOS, HOST, USUARIO DO BANCO, SENHA)
        if (isset($_POST["email"])) {
          // VERIFICA SE O FORMULARIO DA LINHA +-71 ESTA RETORNADO ALGO
          $email = $_POST["email"];
          $senha = $_POST["senha"];
          // CHAMA A FUNÇÃO BUSCARDADOS(RETORNA UM ARRAY) COM PARAMETRO $pesquisar
          $resultado = Buscardadosdelogin($email, $senha);
          // ADICIONA O VALOR DE $P->BUSCARDADOS A VARIAVEL $resultado  
          if (count($resultado) > 0) {
          } else {
            // CASO O ARRAY ESTIVER VAZIO O CLIENTE NÃO TEM CADASTRO
            Mensagem("OPS!, Email ou Senha incorreto!", "danger");
          }
        }
        ?>
      </div>
    </div>
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