<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../views/css/bootstrap.min.css">
    <link rel="stylesheet" href="../views/css/style.css">
    <script src="https://kit.fontawesome.com/6cb3083259.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../views/css/assets/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">


    <title>Bem-Vindo(a)</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            width: 100vw;
            height: 91.3vh;
        }

        /* PARA MODIFICAÇÕES NA BARRA DE NAVEGAÇÃO */
        
        .nav-item {
            margin-left: 60px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 20px;
            font-weight: bold;
        }

        .navbar-brand {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 20px;
            font-weight: bold;
            color: rgb(238, 84, 204);
            top: 0;
        }

        #navbarTogglerDemo01 > a {
            color: black;
        }

        #navbarTogglerDemo01 > a:hover {
            color: rgb(238, 84, 204);
        }



        /* TEXTOS NA FRENTE DA FOTO */
        .anuncio {
            position: absolute;
            width: 40%;
            align-content: center;
            top: 40%;
            transform: translate(20, -50%);
        }

        .titulo {
            font-size: 50px;
            font-family: "Poetsen One", sans-serif;
            font-weight: 400;
            font-style: normal;
            color: white;
            align-items: center;
        }

        .sub_titulo {
            font-size: 25px;
            font-family: "Poetsen One", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            color: white;
            align-items: center;
            margin-left: 20%;
            margin-right: 20%;

        }

        /* PARA MUDANÇAS NO BOTÃO */
        .btn-outline-primary {
            background-color: rgb(238, 84, 204);

        }

        .btn-outline-primary:hover,
        .btn-outline-primary:active {

            background-color: rgb(145, 7, 122);

        }

        /* CONTÉM AS DIVS DA TELA*/
        .mural {
            display: flex;
            width: 100%;
            height: 80%;
            
            background-color: black;
            overflow: hidden;
        }

        /* FOTO QUE AUMENTA*/
        .imagem {

            width: 100%;
            height: 100%;
            background-image: url('./voluntarios-produtos.jpg');
            background-repeat: no-repeat;
            background-position: right 35% top 35%;
            background-size: cover;
            object-fit: fill;
            opacity: 40%;
            text-align: center;
        }

        .imagem:hover {
            transform: scale(1.1);
            /* Adiciona um efeito de escala */
            transition: 500ms linear;
        }


        /* RODA-PÉ */
        footer {

            background-color: black;
            display: block;
            z-index: 10;
            height: 20%;
        }

        .row {
            display: flex;

            align-items: center;
            justify-content: center;
        }

        .footer-titulo {
            color: darkgray;
            line-height: 1;
            font-size: 18px;
            margin-top: 40px;
            margin-left: 15px;
            font-weight: bold;
            text-transform: uppercase;
            border-left: inset;
            border-color: rgb(238, 84, 204);
            padding-left: 5px;
            text-align: left;
        }

        .footer-texto {
            color: darkgray;
            line-height: 1.5;
            font-size: 14px;
            margin-top: 10px;
            padding-left: 5px;
            font-weight: bold;
            text-transform: uppercase;
            text-align: left;

        }
    </style>


</head>

<body>

    <div class="navega">

        <!-- Barra de Navegação -->

        <nav style="background: rgb(255, 255, 255)" class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                    <a class="navbar-brand" href="/tela_inicial.php"><img src="./css/assets/mob.png" width="60" height="30" class="d-inline-block align-top" alt="" class="nav-item"> Mapeando o Bem</a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navbarTogglerDemo01">
                        <!--Itens da Barra de Navegação -->
                        <li class="nav-item" id="navbarTogglerDemo01">
                            <a class="nav-link" aria-current="page" href="#">Quem somos</a>
                        </li>
                        <li class="nav-item dropdown" id="navbarTogglerDemo01">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" id="navbarTogglerDemo01">Redes Sociais</a>


                            <div style="width: 180px;text-align: center;border-color: rgb(255, 255, 255);background:rgb(255, 255, 255)" class="dropdown-menu" id="navbarTogglerDemo01">
                                <a style="background:rgb(255, 255, 255); margin:auto" class="dropdown-item" href="https://www.instagram.com/mapeandoobem/" target="_blank" id="navbarTogglerDemo01"><i style="font-size: 22px;" class="fa-brands fa-instagram fa-fade">
                                        <nome style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size:20px"> Instagram</nome>
                                    </i></a>
                            </div>
                        </li>
                        <li class="nav-item" id="navbarTogglerDemo01">
                            <a class="nav-link" aria-current="page" href="#" id="navbarTogglerDemo01">Contribua <i class="fa-solid fa-hand-holding-heart"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


    </div>

    <div class="mural">

        <div class="imagem">
        <!-- DIV DA IMAGEM. NÃO APAGAR! -->
        </div>

        <div class="anuncio">
            <p class="titulo">Seja Um Voluntário!</p>
            <p class="sub_titulo">Com um click de distância, encontre a casa de apoio mais próxima de você.</p>
            <form action="./login.php" method="post">
                <button type="post" id="Idcadastro" style="font-weight:bold;border: 1px solid rgb(238, 84, 204);width:400px; color:rgb(255, 255, 255);margin-top: 2%;" class="btn btn-outline-primary">Acessar</button>
                <!-- background-color:rgb(238, 84, 204); -->
            </form>
        </div>
    </div>



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <ul>
                        <li>
                            <p class="footer-titulo">Conheça</p>
                        </li>
                        <li>
                            <p class="footer-texto">Conecte-se com uma rede ativa de casas de apoio e voluntários.</p>
                        <li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <ul>
                        <li>
                            <p class="footer-titulo">Candidate-se</p>
                        </li>
                        <li>
                            <p class="footer-texto">Encontre vagas para trabalhos voluntários próximos a você.</p>
                        <li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <ul>
                        <li>
                            <p class="footer-titulo">Acompanhe</p>
                        </li>
                        <li>
                            <p class="footer-texto">Fique por dentro do que vem sendo realizado através de nossa time-line.</p>
                        <li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>





    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>

</html>