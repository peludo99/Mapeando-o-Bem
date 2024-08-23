<?php
require_once '../controllers/funcoes.php';

session_start();
$nome_usuario = $_SESSION['user'];
$id_user = $_SESSION['id'];
$email2 = $_SESSION['email'];
$permissão = $_SESSION['permissoes'];
Deletarimg($email2);



$imagemperfil =  Buscarimgperfil($email2);

$imagemperfil1 = array();

for ($i = 0; $i < count($imagemperfil); $i++) {

    foreach ($imagemperfil[$i] as $elemento) {
        $imagemperfil1[] = $elemento;
    }
}












?>


<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->

    <script src="../controllers/jquery-3.7.1.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://kit.fontawesome.com/6cb3083259.js" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="./css/assets/favicon.ico" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



    <script type="module" src="../controllers/userimg.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <title>Edição de Perfil</title>


    <style>
        body {

            overflow: hidden;
        }

        .editusuario {


            width: 100%;
            height: auto;
            margin: 10px;
            z-index: 50;



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




        .esquerda {
            height: 100%;
            width: 60%;
            background-color: #efefef;
        }

        .direita {
            height: 100%;
            width: 40%;


        }

        .conteudo-direita {


            width: 100%;
            height: 100%;
            padding: 20px;
            margin: auto;

            background-color: white;

        }

        .conteudo-esquerda {

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;



            width: 100%;
            height: 100%;



            padding: 20px;
            box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;



        }

        .wave-group {
            position: relative;
        }

        .wave-group .input {
            font-size: 20px;
            padding: 10px 10px 10px 5px;
            display: block;
            width: 350px;
            border: none;
            border-bottom: 1px solid #515151;
            background: transparent;
        }

        .wave-group .input:focus {
            outline: none;
        }

        .wave-group .label {
            color: #999;
            font-size: 18px;
            font-weight: normal;
            position: absolute;
            pointer-events: none;
            left: 5px;
            top: 10px;
            display: flex;
        }

        .wave-group .label-char {
            transition: 0.2s ease all;
            transition-delay: calc(var(--index) * .05s);
        }

        .wave-group .input:focus~label .label-char,
        .wave-group .input:valid~label .label-char {
            transform: translateY(-20px);
            font-size: 14px;
            color: #5264AE;
        }

        .wave-group .bar {
            position: relative;
            display: block;
            width: 200px;
        }

        .wave-group .bar:before,
        .wave-group .bar:after {
            content: '';
            height: 2px;
            width: 0;
            bottom: 1px;
            position: absolute;
            background: #5264AE;
            transition: 0.2s ease all;
            -moz-transition: 0.2s ease all;
            -webkit-transition: 0.2s ease all;
        }

        .wave-group .bar:before {
            left: 85%;
        }

        .wave-group .bar:after {
            right: 10%;
        }

        .wave-group .input:focus~.bar:before,
        .wave-group .input:focus~.bar:after {
            width: 90%;
        }



        .direita-esquerda-info {
            width: auto;
            height: auto;
            margin: 10px;





        }

        .esquerda-esquerda-info {
            width: auto;
            height: auto;
            margin: 10px;




        }

        .baixo-esquerda-info {




            width: 100%;


            margin-top: 40px;


            display: flex;
            justify-content: center;
            align-items: center;


        }

        .cima {
            display: flex;
            flex-direction: row;
            height: 100px;

        }

        .map {
            background-color: black;
            margin-top: 10px;
            width: 100%;
            height: 40%;
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

$_SESSION['user'] = $dados[0];







?>


<body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <div class="modal  fade" style="width:100%;margin-left: -10%;margin-top:2%" id="addarquivo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="document" style="background-color:none;margin:auto;margin-top:0px;padding:1px;width:800px; height:650px;">


            <div class="modal-content" style="width:800px; height:660px; margin:auto;margin-top:0px; background-color: #6e5f68; padding:10px">





                <div id="preview" style="overflow: hidden;">




                </div>
                <div class="botoesimagemprev">
                    <div class="inputimgbtn">


                        <label for="imagem" style="margin: 10px;">Selecionar Arquivo</label>
                        <input type="file" style="display:none" class="btnenviarimg" name="imagem" id="imagem">



                        <div id="classbtn" class="imgbtnenviar" style="display: none;"> <button id="imagembtn" style="border: 1px solid black;height:35px;padding:1px;font-size:15px;border-radius: 5%;width:180px; color:black;margin-bottom: 5%; background-color:#35f15e; z-index:101;">Enviar</button></div>

                    </div>


                </div>






            </div>

        </div>

    </div>




    <div class="container-usuario">

        <div class="direita">
            <div class="conteudo-direita">

                <div class="header">
                    <H1>Perfil</H1>
                    <?php echo "<h2>$dados[0]</h2>"; ?>

                    <?php


                    if (!end($imagemperfil1) == null) {
                        echo '<img class="imgUser" style="object-fit:cover;width:150px;height:150px"  src="' . end($imagemperfil1) . '" alt="">';
                    } else {

                        echo '<img class="imgUser" style="object-fit:cover;width:150px;height:150px"  src="./css/assets/perfil.jpg" alt="">';
                    }



                    ?>
                </div>
                <br>

                <button style="border: 1px solid black;height:35px;padding:1px;font-size:15px;border-radius: 5%;width:180px; color:black;margin-top: 2%; background-color:#c0bfbf;" data-bs-toggle="modal" data-bs-target="#addarquivo">Alterar Imagem <i class="fa-solid fa-image fa-bounce"></i></button>

                <div class="about">
                    <h1>Sobre mim:</h2>
                        <p> Gosto de desenvolver atividades de voluntariado em minhas horas vagas.
                            Atualmente tenho mais contato com abrigos de animais e asilos .</p>
                </div>

                <?php

                if ($permissão == 1) {

                    echo '<div class="map">

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3950.4908376680924!2d-34.88221991451888!3d-8.05130958198308!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab187db07a840d%3A0xd02075371cbf769f!2sEscola%20T%C3%A9cnica%20Estadual%20Gin%C3%A1sio%20Pernambucano!5e0!3m2!1spt-BR!2sbr!4v1718103745972!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                </div>';
                }

                ?>

             


                <!-- 
                
                Não vale o esforco no momento
                <div class="social">
                    <p>Me acompanhe:</p>
                    <i class="fa-brands fa-square-instagram"></i>
                    <i class="fa-brands fa-square-facebook"></i>
                </div> -->



            </div>
        </div>

        <div class="esquerda">
            <div class="conteudo-esquerda" style="overflow-y: scroll;">
                <br>
                <br>
                <?php
                if (isset($_POST['email'])) {

                    $email = $_POST['email'];
                    $senha = $_POST['senha'];
                    $nome = $_POST['nome'];

                    // Buscar cep


                    if (isset($_POST['cep'])) {





                        if (mb_strlen($_POST['cep']) == 8) {
                            $cepvia = $_POST['cep'];
                            $endereco = array();
                            if (!$cepvia == null) {

                                $url = "https://viacep.com.br/ws/{$cepvia}/json/";
                                $endereco = json_decode(file_get_contents($url), true);

                                if (isset($endereco['erro'])) {
                                    if ($endereco['erro'] == true) {
                                        Mensagems("CEP não encontrado", "danger");
                                    }
                                } else {

                                    $cep = $_POST['cep'];
                                    $estado = $endereco['uf'];
                                    $bairro = $endereco['bairro'];
                                    $rua = $endereco['logradouro'];

                                    Alterardados($nome, $email, $senha, $rua, $cep, $estado, $bairro, $id_user);
                                    echo "<script>window.location.href = '" . $_SERVER['PHP_SELF'] . "';</script>";
                                }
                            }
                        } else {
                            Mensagems("CEP incompleto", "danger");
                        }
                    }
                }

                ?>
                <form class="form" action="../views/usuario.php" method="post">
                    <h2>Informações Pessoais</h2>

                    <div class="cima">
                        <div class="esquerda-esquerda-info">

                            <div class="wave-group">
                                <input required type="text" name="nome" id="nome" class="input" value="<?php echo $dados[0]; ?>">
                                <span class="bar"></span>
                                <label class="label">
                                    <span class="label-char" style="--index: 0">N</span>
                                    <span class="label-char" style="--index: 1">o</span>
                                    <span class="label-char" style="--index: 2">m</span>
                                    <span class="label-char" style="--index: 3">e</span>
                                </label>
                            </div>

                            <br>
                            <div class="wave-group">
                                <input type="text" class="input" name="bairro" id="bairro" value="<?php echo $dados[5]; ?>">
                                <span class="bar"></span>
                                <label class="label">
                                    <span class="label-char" style="--index: 0">B</span>
                                    <span class="label-char" style="--index: 1">a</span>
                                    <span class="label-char" style="--index: 2">i</span>
                                    <span class="label-char" style="--index: 3">r</span>
                                    <span class="label-char" style="--index: 4">r</span>
                                    <span class="label-char" style="--index: 5">o</span>
                                </label>
                            </div>
                        </div>
                        <br>
                        <div class="direita-esquerda-info">
                            <div class="wave-group">
                                <input required="" type="text" class="input" name="cep" id="cep" value="<?php echo $dados[3]; ?>">
                                <span class="bar"></span>
                                <label class="label">
                                    <span class="label-char" style="--index: 0">C</span>
                                    <span class="label-char" style="--index: 1">E</span>
                                    <span class="label-char" style="--index: 2">P</span>
                                </label>
                            </div>
                            <br>
                            <div class="wave-group">
                                <input type="text" class="input" name="estado" id="estado" value="<?php echo $dados[6]; ?>">
                                <span class="bar"></span>
                                <label class="label">
                                    <span class="label-char" style="--index: 0">E</span>
                                    <span class="label-char" style="--index: 1">s</span>
                                    <span class="label-char" style="--index: 2">t</span>
                                    <span class="label-char" style="--index: 3">a</span>
                                    <span class="label-char" style="--index: 4">d</span>
                                    <span class="label-char" style="--index: 5">o</span>
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="baixo-esquerda-info">
                        <br>
                        <br>
                        <div class="wave-group">
                            <input type="text" class="input" name="rua" id="rua" value="<?php echo $dados[4]; ?>">
                            <span class="bar"></span>
                            <label class="label">
                                <span class="label-char" style="--index: 0">R</span>
                                <span class="label-char" style="--index: 1">u</span>
                                <span class="label-char" style="--index: 2">a</span>
                            </label>
                        </div>

                    </div>











                    <div class="modificacoes">














                        <div class="seguranca">
                            <h2>Segurança da Conta</h2>

                            <span class="input-span">
                                <label for="email" class="label">Email</label>
                                <input type="email" name="email" id="email" value="<?php echo $dados[1]; ?>"></span>
                            <span class="input-span">
                                <label for="password" class="label">Password</label>
                                <input type="password" name="senha" id="password" value="<?php echo $dados[2]; ?>"></span><br>


                            <input type="hidden" name="id" value="<?php echo $dados[7]; ?>">

                            <button type="submit" id="Idcadastro" style="border: 1px solid rgb(238, 84, 204);width:400px; color:rgb(255, 255, 255);margin-top: 2%;" class="btn btn-outline-primary">Atualizar informaçoes</button>

                            <a href="#" id="Idcadastro" style="border: 1px solid rgb(238, 84, 204);width:400px; color:rgb(255, 255, 255);margin-top: 2%; background-color: #e953ad;" class="btn btn-outline-primary">Torna-se Casa de Apoio</a>

                            <a href="../views/tela_inicial.php" id="Idcadastro" style="border: 1px solid rgb(238, 84, 204);width:400px; color:rgb(255, 255, 255);margin-top: 2%; background-color: rgb(238, 38, 38);" class="btn btn-outline-primary">voltar</a>


                        </div>











                    </div>









            </div>
            </form>


        </div>




    </div>






    </div>
    </div>
    </div>







</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>