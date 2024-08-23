<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../views/css/bootstrap.min.css">
    <link rel="stylesheet" href="../views/css/style.css">
    <script src="https://kit.fontawesome.com/6cb3083259.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../views/css/assets/icone.ico" type="image/x-icon">
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
            height: 100vh;
            overflow-x: hidden;
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

        #navbarTogglerDemo01>a {
            color: black;
        }

        #navbarTogglerDemo01>a:hover {
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
        .btn-acessar:hover {

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
            height: 190px;
            -webkit-box-shadow: 0px 20px 20px -3px rgba(66, 68, 90, 1);
            -moz-box-shadow: 0px 20px 20px -3px rgba(66, 68, 90, 1);
            box-shadow: 0px 20px 20px -3px rgba(66, 68, 90, 1);

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


        .btn-acessar:active {

            background-color: palevioletred;

        }


        .btn-acessar {

            background-color: rgb(238, 84, 204);
            border-radius: 10px;
            font-size: 20px;
            padding-bottom: 5px;
            font-weight: bold;
            border: 1px solid rgb(238, 84, 204);
            width: 300px;
            color: rgb(255, 255, 255);
            margin-top: 2%;
            height: 40px;

        }

        /*  ---------------- SOBRE NÓS ----------------  */

        .img-fluid {
            width: 70%;
            margin-top: -10px;
        }

        #sobrenos {
            margin-top: 5%;
            height: 500px;
            width: auto;
        }

        .main-title {
            color: #444;
            margin: 70px 0 50px 0;
            font-size: 40px;
            text-align: center;
            position: relative
        }

        .main-title::after {
            content: "";
            border-top: 1.5px solid #333;
            width: 16%;
            position: absolute;
            top: 65px;
            left: 42.5%;
        }

        .sobrenos-titulo {
            font-size: 17px;
            color: #444;
            text-transform: uppercase;
            font-weight: bold;
        }

        h4 {
            font-size: 13px;
            color: #5a5a5a;
            justify-content: center;
        }

        h6 {
            color: #444;
            margin-top: 5px;
            font-size: 18px;
            text-align: justify;
        }

        .sobra {
            height: 230px;
            width: auto;
        }




        @media(max-width: 800px){
           .navega{
            display: none;
           }

           .anuncio{

            width: 100%;

            height: 100%;
            top: 50px;

            display: flex;

            flex-direction: column;
           }

            footer{

                display: flex;
                flex-direction: row;


                height: auto;

                margin: 0px;


            }

            .main-title::after{
                display: none;
            }



         
        }

    </style>

</head>

<body>

    <div class="navega">

        <!-- Barra de Navegação -->

        <nav style="background: rgb(255, 255, 255); height: 50px;" class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01" style="margin-top: 5px;">

                    <a class="navbar-brand" href="#anchor-topo"><img src="./css/assets/mob.png" width="60" height="30" class="d-inline-block align-top" alt="" class="nav-item"> Mapeando o Bem</a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navbarTogglerDemo01">
                        <!--Itens da Barra de Navegação -->
                        <li class="nav-item" id="navbarTogglerDemo01">
                            <a class="nav-link" aria-current="page" href="#anchor-quemsomos">Quem somos</a>
                        </li>
                        <li class="nav-item dropdown" id="navbarTogglerDemo01">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" id="navbarTogglerDemo01">Redes Sociais</a>


                            <div style="width: 180px;text-align: center;border-color: rgb(255, 255, 255);background:rgb(255, 255, 255)" class="dropdown-menu" id="navbarTogglerDemo01">
                                <a style="background:rgb(255, 255, 255); margin:auto" class="dropdown-item" href="https://www.instagram.com/mapeandoobem/" target="_blank" id="navbarTogglerDemo01"><i style="font-size: 22px;" class="fa-brands fa-instagram fa-fade">
                                        <nome style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size:20px"> Instagram</nome>
                                    </i></a>
                            </div>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </nav>


    </div>

    <div class="mural" id="anchor-topo">

        <div class="imagem">
            <!-- DIV DA IMAGEM. NÃO APAGAR! -->
        </div>

        <div class="anuncio">
            <p class="titulo">Seja Um Voluntário!</p>
            <p class="sub_titulo">Com um click de distância, encontre a casa de apoio mais próxima de você.</p>
            <form action="./login.php" method="post">
                <button type="post" id="Idcadastro" class="btn-acessar">Acessar</button>
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


    <div class="container" id="sobrenos">
        <div class="row">
            <div class="col-12" id="anchor-quemsomos">
                <h3 class="main-title">Sobre a Mapeando o Bem</h3>
            </div>
            <div class="main-title-linha">
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="https://alpasbox.com/wp-content/uploads/2019/11/1-28.png" alt="agencia mob">
            </div>
            <div class="col-md-6">
                <h3 class="sobrenos-titulo">Uma plataforma que impulsiona o voluntariado.</h3><br>
                <h6>Focamos em ampliar o contato das Casas de Apoio com o público, tornando-as mais acessíveis e mais evidentes para pessoas que buscam desenvolver o voluntariado.</h6>
                <h6>Utilize os recursos disponíveis em nossa plataforma para encontrar facilmente a casa de apoio mais próxima de você. Saiba exatamente como ajudar.</h6>
                <h6>Você é o gestor de uma casa de apoio? com nossa plataforma será possível alcançar um público maior de voluntários, além de conseguir elencar suas necessidades em tempo real. Torne claro para as pessoas de que maneira podem ajudar!</h6><br>
                <i>
                    <h4>Somos uma iniciativa de estudantes da instituição de ensino ETE Ginásio Pernambucano, de Recife/PE.</h4>
                </i>
            </div>
        </div>

        <div class="sobra">

        </div>
    </div>







    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>

</html>