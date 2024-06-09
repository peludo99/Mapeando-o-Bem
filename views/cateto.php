<?php
require_once '../controllers/funcoes.php';

session_start();
$nome_usuario = $_SESSION['user'];
$email2 = $_SESSION['email'];
Deletarimg($email2);



if (!isset($_GET['id'])) {
    echo "nao tem id";
} else {
    $id_user = $_GET['id'];
}











?>


<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/6cb3083259.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="./css/assets/favicon.ico" type="image/x-icon">
    <title>Edição de Perfil</title>


    <style>
        body {}

        .editusuario {


            width: 100%;
            height: auto;
            margin: 10px;
            z-index: 50;



        }


        .formPostA {
            height: auto;
        }





        /*  CAIXA SOBRE  */
        form {
            --bg-light: #efefef;
            --bg-dark: #707070;
            --clr: #58BC82;
            --clr-alpha: #9c9c9c60;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            width: 80%;

        }

        .form .input-span {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: .5rem;
        }

        form input[type="email"],
        form input[type="password"] {
            border-radius: 0.5rem;
            padding: 1rem 0.75rem;
            width: 100%;
            border: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background-color: var(--clr-alpha);
            outline: 2px solid var(--bg-dark);
        }

        form input[type="email"]:focus,
        form input[type="password"]:focus {
            outline: 2px solid var(--clr);
        }



        form .submit {
            padding: 1rem 0.75rem;
            width: 100%;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            border-radius: 3rem;
            background-color: var(--bg-dark);
            color: var(--bg-light);
            border: none;
            cursor: pointer;
            transition: all 300ms;
            font-weight: 600;
            font-size: .9rem;
        }

        form .submit:hover {
            background-color: var(--clr);
            color: var(--bg-dark);
        }

        .span {
            text-decoration: none;
            color: var(--bg-dark);
        }

        .span a {
            color: var(--clr);
        }

        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #fbc2eb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(251, 194, 235, 1), rgba(166, 193, 238, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(251, 194, 235, 1), rgba(166, 193, 238, 1))
        }

        /*  ----------------------------------------------------------------  */


        * {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .header>img {
            width: 40%;
            margin-bottom: -30px;
        }

        .header>h1 {
            color: black;
            padding: 25px;
            font-size: 40px;

        }

        .posteant {
            display: flex;
            flex-direction: column-reverse;

            overflow-y: scroll;
        }

        .header>h2 {
            color: #404040;
            font-size: 20px;
        }

        p {
            color: #404040;
        }

        /*  ---------  */

        .social>i {
            width: 2%;
        }


        .about {
            background-color: #e9e9e9;

            margin: auto;
            margin-top: 50px;
            padding: 10px;

            p {
                text-align: start;
            }
        }

        .about>h1 {
            color: black;
            font-size: 23px;

        }

        .modificacoes>h2 {
            font-size: 23px;
            margin-top: 35px;
            padding: 5px;
        }

        .seguranca>h2 {

            padding: 5px;
        }

        .btn-outline-primary {
            background-color: rgb(238, 84, 204);

        }

        .btn-outline-primary:hover,
        .btn-outline-primary:active {

            background-color: rgb(145, 7, 122);

        }


        .container-usuario {
            height: 100vh;
            width: 100vw;

            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;

        }




        .direita {
            height: 100%;
            width: 70%;
            background-color: #efefef;
        }

        .esquerda {
            height: 100%;
            width: 30%;


        }

        .conteudo-esquerda {


            width: 100%;
            height: 100%;
            padding: 20px;
            margin: auto;

            background-color: white;

        }

        .conteudo-direita {

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;



            width: 100%;
            height: 100%;



            padding: 20px;
            box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;



        }
    </style>

</head>



<?php


$dados_bruto = BuscarDadosCadastro1($id_user);
$dados = array();

for ($i = 0; $i < count($dados_bruto); $i++) {

    foreach ($dados_bruto[$i] as $elemento) {
        $dados[] = $elemento;
    }
}











?>


<body>

    <div class="container-usuario">

        <div class="esquerda">
            <div class="conteudo-esquerda">

                <div class="header">
                    <H1>Perfil</H1>
                    <?php echo "<h2>$dados[0]</h2>"; ?>
                    <img class="foto" src="css/assets/perfil.png" alt="">
                </div>

                <div class="about">
                    <h1>Sobre mim:</h2>
                        <p> Gosto de desenvolver atividades de voluntariado em minhas horas vagas.
                            Atualmente tenho mais contato com abrigos de animais e asilos .</p>
                </div>


            </div>
        </div>

        <div class="direita">
            <div class="conteudo-direita">

                <div class="posteant">


                    <?php

                    $quantidadedepost = quantidadedepostsbyid($id_user);


                    $conteudo_post = array();
                    $files_post = array();
                    $email_post = array();
                    $id_post = array();
                    $data_post = array();
                    $id_post_user = array();



                    for ($i = 1; $quantidadedepost + 1 > $i; $i++) {
                        $conteudo_post[] = (($i * 7) - 6) - 1;
                        $files_post[] = (($i * 7) - 5) - 1;
                        $email_post[] = (($i * 7) - 4) - 1;
                        $nome_post[] = (($i * 7) - 3) - 1;
                        $data_post[] = (($i * 7) - 2) - 1;
                        $id_post_user[] = (($i * 7) - 1) - 1;
                        $id_post[] = (($i * 6));
                    }

                    $post_one = Exibirpostsbyid($id_user);
                    $post_supremo = array();
                    $post_ultra = array();
                    foreach ($post_one as $post) {
                        $post_supremo[] = $post;
                    }
                    for ($i = 0; $i < quantidadedepostsbyid($id_user); $i++) {

                        foreach ($post_supremo[$i] as $elemento) {
                            $post_ultra[] = $elemento;
                        }
                    }

                    for ($i = 0; $i < count($conteudo_post); $i++) {

                        Telainicial($post_ultra[$nome_post[$i]], $post_ultra[$conteudo_post[$i]], $post_ultra[$files_post[$i]], $post_ultra[$data_post[$i]], $post_ultra[$id_post_user[$i]]);
                    }

                    ?>







                </div>






            </div>




        </div>






    </div>
    </div>
    </div>







</body>

</html>