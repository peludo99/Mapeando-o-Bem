<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <?php
    require_once 'conexao.php';
    // Mesclar Funcoes de conexao.php

    $p = new Pessoa('test', 'localhost', 'root', '');

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

    <h1><b>Mapeando o Bem | Seu voluntariado a um click de distância.</b></h1>
    <h3>Venha fazer parte do nosso grupo de voluntários. Cadastre-se em nossa plataforma.</h3>
    <hr>

    <header>
        <form action="./login.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="nome_usuario"> Nome de usuario:
                            <input type="text" name="nome_usuario" id="nome_usuario" placeholder="Nos fale seu nome" required>
                        </label>

                    </td>
                </tr>

                <tr>
                    <td colspan="">
                        <label for="email_usuario"> E-mail:
                            <input type="text" name="email_usuario" id="email_usuario" placeholder="Digite seu E-mail" required>
                        </label>

                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="email_usuario"> Senha:
                            <input type="password" name="senha_usuario" id="senha_usuario" placeholder="Digite sua senha" required>
                        </label>

                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Cadastrar">
                    </td>
                </tr>





            </table>



        </form>
    </header>




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