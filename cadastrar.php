<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/6cb3083259.js" crossorigin="anonymous"></script>
  <title>Login</title>
  <style>
    .btn-outline-primary:hover {

      background-color: rgb(59, 3, 50);



    }
  </style>

  <!-- ARQUIVO DE LOGIN  -->
</head>

<body class="cadastrar-js">

  <?php
  // AREA PHP
  require_once 'conexao.php';
  // Mesclar Funcoes de conexao.php

  $p = new Pessoa('test', 'localhost', 'root', '');
  ?>

  <!-- AREA HTML -->

  <div class="containerlog">
    <div class="conteudo conteudo-um">
      <div class="coluna-um">
        <h2 class="titulo-bem">
          Bem vindo de volta!
        </h2>
        <p class="descricao">Conecte-se com nosco</p>

        <form action="login.php" method="post">
          <button style="font-weight:bold;border: 1px solid rgb(59, 3, 50); color:rgb(255, 255, 255)" id="Idlogin" class="btn btn-outline-primary">Entrar na conta</button>
        </form>
      </div>
      <div class="coluna-dois">
        <h2 class="titulo-cad">Criar conta</h2>
        <div class="redes-sociais">
          <ul class="rede-social-list">
            <li class="item-rede"><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
            <li class="item-rede"><a href="#"><i class="fa-brands fa-google"></i></a></li>
            <li class="item-rede"><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
          </ul>
        </div>
        <!-- redes -->
        <p class="descricao descricao-um">Ou utilise seu email para o cadastro</p>
        <form action="cadastrar.php" method="post" class="forms">
          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-user"></i></span>
            <input type="text" name="nome_usuario" class="form-control" placeholder="Nome" aria-label="nome" aria-describedby="addon-wrapping">

          </div>
          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-envelope"></i></span>
            <input type="text" name="email_usuario" class="form-control" placeholder="Email" aria-label="email" aria-describedby="addon-wrapping">
          </div>
          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-lock"></i></span>
            <input type="text" name="senha_usuario" class="form-control" placeholder="Senha" aria-label="senha" aria-describedby="addon-wrapping">
          </div>
          <br>
          <input type="submit" style="font-weight:bold;border: 1px solid rgb(59, 3, 50); color:rgb(204, 50, 171);" class="btn btn-outline-primary" value="Cadastrar"> <br>

        </form>
        <?php
        if (isset($_POST["email_usuario"])) {
          $nick = addslashes($_POST['nome_usuario']);
          $email = addslashes($_POST['email_usuario']);
          $senha = addslashes($_POST['senha_usuario']);

          if (!empty($nick) && !empty($email) && !empty($senha)) {
            if (!$p->Cadastrarusuario($nick, $email, $senha));
          } else {
            Mensagem("OPS!, É necessario preencher todos os campos!", "danger");
          }
        }
        ?>
      </div>
    </div>
    <!-- coluna dois -->
    <div class="conteudo conteudo-dois">
      <div class="coluna-um">
        <h2 class="titulo-bem">Seja bem-vindo
        </h2>
        <p class="descricao">Não Possui conta?</p>
        <form action="cadastrar.php" method="post">
          <button type="post" id="Idcadastro" style="font-weight:bold;border: 1px solid rgb(59, 3, 50); color:rgb(255, 255, 255)" class="btn btn-outline-primary">Cadastrar-se</button>
      </form>
      </div>
      <div class="coluna-dois">
        <h2 class="titulo-cad">Entre em sua conta</h2>
        <div class="redes-sociais">
          <ul class="rede-social-list">
            <li class="item-rede"><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
            <li class="item-rede"><a href="#"><i class="fa-brands fa-google"></i></a></li>
            <li class="item-rede"><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
          </ul>
        </div>
        <!-- redes -->
        <p class="descricao descricao-um">Ou utilise seu email</p>
        <form action="" method="post" class="forms">
          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-envelope"></i></span>
            <input type="text" name="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="addon-wrapping" required>
          </div>
          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-lock"></i></span>
            <input type="text" name="senha" class="form-control" placeholder="Senha" aria-label="senha" aria-describedby="addon-wrapping">
          </div>

          <a class="senha" href="#">Esqueceu a senha?</a>
          <br>

          <input type="submit" style="font-weight:bold;border: 1px solid rgb(59, 3, 50); color:rgb(204, 50, 171) ;" class="btn btn-outline-primary" value="Logar">
          <br>



        </form>
        <?php
        // INSTANCIA DA CLASSE PESSOA COM CONSTRUTORES (BANCO DE DADOS, HOST, USUARIO DO BANCO, SENHA)
        if (isset($_POST["email"])) {
          // VERIFICA SE O FORMULARIO DA LINHA +-71 ESTA RETORNADO ALGO
          $pesquisar = $_POST["email"];
          // ADICIONA O VALOR DP POST EMAIL A VARIAVEL $pesquisar
          $p->BuscarDados($pesquisar);
          // CHAMA A FUNÇÃO BUSCARDADOS(RETORNA UM ARRAY) COM PARAMETRO $pesquisar
          $resultado = $p->BuscarDados($pesquisar);
          // ADICIONA O VALOR DE $P->BUSCARDADOS A VARIAVEL $resultado  
          if (count($resultado) > 0) {
            // VERIFICA SE $resultado RETORNOU ALGO COM A FUNÇÃO COUNT
            echo "<meta http-equiv='refresh' content='1'; URL='./tela_inicial.php'>";
          } else {
            // CASO O ARRAY ESTIVER VAZIO O CLIENTE NÃO TEM CADASTRO
            Mensagem("OPS!, Você Não possui uma conta!", "danger");
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