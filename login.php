<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="teste.css">


  <title>Login</title>

  <!-- ARQUIVO DE LOGIN  -->
</head>

<body>

  <?php
  // AREA PHP
  require_once 'conexao.php';
  // Mesclar Funcoes de conexao.php

  $p = new Pessoa('test', 'localhost', 'root', '');

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
      echo "FOI";
    } else {

      // CASO O ARRAY ESTIVER VAZIO O CLIENTE NÃO TEM CADASTRO
      echo "<dialog open>Voce nao possui cadastro</dialog>";
    }
  }

  // FIM DO PHP


  ?>

  <!-- AREA HTML -->

  <!-- TITULO -->

  <section>
    <h1><b>Mapeando o Bem<br> Seu voluntariado a um click de distância.</b></h1>
    <h3><i>Descubra o bem que está ao seu redor, participe de ações e transforme vidas.</i></h3>
    <hr>
  </section>
  <div class="container-log">

    <header>
      <!-- FORMULARIO DE LOGIN -->
      <br><b>Fazer login</b> <br>
      <br>


      <form action="login.php" method="post">





        <label class="sr-only" for="inlineFormInputGroupUsername">Email</label>
        <div class="input-group">
          <div class="input-group-prepend" style="border:palevioletred">
            <div style="background:rgb(238, 84, 204);border:palevioletred;" class="input-group-text"><img src="assets/favicon-32x32.png" alt="simbolo email"></div>
          </div>
          <input type="email" class="form-control" id="inlineFormInputGroupUsername" placeholder="Digite seu email" require>
        </div>



        <label class="sr-only" for="inlineFormInputName">Senha</label>
        <input type="password" class="form-control" id="inlineFormInputName" placeholder="Senha">

        <div class="col-auto my-1">
          <button type="submit" class="btn btn-primary" style="background:rgb(238, 84, 204);border:palevioletred">Logar</button>
        </div>
      </form>
      <h3 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size:20px"><br>Ainda não possui cadastro? <a href='./cadastro.php'>cadastre-se</a><br></h3>

    </header>
  </div>






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