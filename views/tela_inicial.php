<?php

require_once('../controllers/funcoes.php');
session_start();
$nomeusuario = $_SESSION['user'];
$email = $_SESSION['email'];
$id = $_SESSION['id'];

if (isset($_POST['submit'])) {
    $nome_imagem_post = $_FILES['image']['name'];
    $nometemp = $_FILES['image']['temp_name'];
    $pasta = '../controllers/temp/' . $nome_imagem;
}

if (isset($_POST['textarea'])) {

    $conteudo = $_POST['textarea'];
    $file = '';
    if (!$conteudo == "" or !$conteudo == NULL) {
        AdicionarPost($conteudo, $file, $email, $nomeusuario);
        header("location: tela_inicial.php#anchor-linhadotempo");
    }
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="../controllers/jquery-3.7.1.js"></script>

    <script type="module" src="../controllers/funcoes.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">

    <title>Tela Inicial</title>


    <style>
        body {
            overflow-x: hidden;
        }

        /* PARA MODIFICAÇÕES NA BARRA DE NAVEGAÇÃO */

        .nav-item {
            margin: 20px;
            margin-top: 0px;
            justify-content: left;
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

        .btn-outline-primary:hover {
            background-color: rgb(59, 3, 50);
        }

        .btn-outline-primary {
            background-color: #19afddbd
        }

        .foto {
            width: 150px;
            height: 150px;
            margin: auto;
        }

        ul {
            margin: auto;
        }

        .btn {
            margin: 4px;
        }

        .logo {
            width: 25px;
            height: 25px;
        }

        /* ---------------- CORPO DO MURAL ---------------- */

        text {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 15px;
        }

        /* FORMATAÇÃO TEXTO */

        .titulo {
            font-size: 50px;
            font-family: "Poetsen One", sans-serif;
            font-weight: 400;
            font-style: normal;
            color: #444;
            align-items: center;

        }

        .titulo>strong {
            color: rgb(238, 84, 204);
        }

        #mob {
            font-size: 80px;
            color: white;
        }

        .sub_titulo {
            font-size: 40px;
            font-family: "Poetsen One", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            color: white;
            align-items: center;

        }

        #sub_car {
            text-align: center;
            font-size: 36px;
            color: #444;
        }

        /* INTRO NO ESTILO PARALLAX */

        .parallax {
            /* imagem utilizada */
            background-image: url("./grupocomida.jpg");
            height: 100vh;
            opacity: 40%;


            /* mantém uma altura especifica */
            min-height: 500px;

            /* cria o efeito scrolling do parallax */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }

        .color_fundo {
            background-color: black;
        }

        .bloco-paralax {
            height: 1px;

            position: relative;
            margin: 0 auto;
            /* alinha a div no centro */
            top: -500px;
            /*CONTROLE AQUI A DISTANCIA*/
        }

        .texto_intro {
            width: 900px;
            margin: auto;
            border-radius: 5%;
        }

        /*  ---------------- INFORMES / CARDS ----------------  */

        .informes {
            z-index: 10px;
            margin: auto;
        }

        .card {
            border-radius: 8%;
            background-color: #00d9ff15;
            border: 20px outset #00d9ff15;
            margin: auto;
            margin-top: 150px;
            margin-bottom: 130px;
            width: 400px;
            height: 400px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;

        }

        .card:hover {
            width: 390px;
            height: 390px;
            -xpedu-transform: rotatez(10deg);
            -ms-transform: rotateZ(10deg);
            transform: rotateZ(10deg);
        }

        .card-caption {
            background-color: orange;
        }

        /* PARTE DO CARROSSEL VOLUNTARIADO */

        .blocos {
            background-color: #ff6edb15;
            height: 800px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        #intro {
            background-color: rgba(255, 255, 255, 0);
            /* ESSA COR MEXE NO BG DO TEXTO DA INTRO */

        }

        .direito {
            margin: 50px;
            margin-top: 8%;

            img {

                border: 2px solid grey;
                border-radius: 15px;
                height: 700px;
                background-color: white;
            }
        }

        .esquerdo {

            margin-top: 22%;
            margin-left: 2.5%;
            width: 900px;
        }

        .carousel-caption {
            background-color: #272727be;
        }

        /*  ---------------- SOBRE NÓS ----------------  */

        .img-fluid {
            width: 70%;
            margin-top: -2px;
        }

        .sobrenos {
            background-color: #f9f9f9;
        }

        .main-title {
            color: #444;
            margin: 215px 0 50px 0;
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
            margin-top: 60px;
        }

        h4 {
            font-size: 13px;
            color: #5a5a5a;
        }

        h6 {
            color: #444;
            margin-top: 14px;
            font-size: 18px;
            text-align: justify;
        }


        /* MODIFICAÇÕES NO POST */
        .posteant {
            display: flex;
            flex-direction: column-reverse;
        }


        .OnorOff {
            display: flex;
            width: 100px;
            margin: auto;
            background-color: rgba(163, 163, 163, 0.651);
            margin-top: 5%;


            button {

                width: 100%;
                border: none;

            }
        }


        rosa {
            color: rgb(220, 50, 171);
        }

        .direita {



            display: flex;
            align-items: flex-end;
            justify-content: flex-end;

            button {
                width: 50px;
                height: 30px;
                background-color: rgba(0, 0, 0, 0);
                ;
                border: none;
                border-radius: 5%;


            }

        }
    </style>










    <!-- Barra de Navegação -->

    <nav style="background: rgb(255, 255, 255); height: 55px; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;" class="navbar navbar-expand-lg fixed-top">



        <a class="navbar-brand" href="./bem_vindo.php"><img src="./css/assets/mob.png" width="60" height="30" class="d-inline-block align-top" alt=""></a>

        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: -23px;" id="navbarTogglerDemo01">
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

        <div class="direita">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navbarTogglerDemo01">
                <li id="navbarTogglerDemo01">
                    <button class="butaomodal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </button>
                </li>
            </ul>
        </div>

    </nav>






    <!-- Barra de navegação - Modal -->
    <div class="modal fade" style="margin-left: 70%; width: 30%;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="width: 30%; background: rgb(219 164 234);">
                <div class="modal-header" style="border: none;">
                    <h5 class="modal-title" id="exampleModalLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="grande">

                        <div class="foto">

                            <img class="foto" src="css/assets/perfil.png" alt="">

                        </div>

                        <div class="botoes">

                            <?php

                            echo "<a class='btn btn-outline-primary' style='border: 1px solid rgb(59, 3, 50);  color:rgb(204, 50, 171);'' href='./usuario.php?'><i class='fa-solid fa-gear'>"



                            ?></i>
                            <texto style="color: white">Editar Perfil</texto>
                            </a>

                            <a class="btn btn-outline-primary" style="border: 1px solid rgb(59, 3, 50);  color:rgb(204, 50, 171);" href="#"><img class="logo" src="css/assets/home_2544087.png" alt="">
                                <texto style="color: white">Entidades Parceiras</texto>
                            </a>

                            <a class="btn btn-outline-primary" style="border: 1px solid rgb(59, 3, 50); color:rgb(204, 50, 171);" href="#">
                                <img class="logo" src="css/assets/donate_1655108.png" alt="">
                                <texto style="color: white"> Ajude-nos</texto>
                            </a>


                            <a class="btn btn-outline-primary" style="border: 1px solid rgb(59, 3, 50);  color:rgb(204, 50, 171);" href="./login.php"><i class="fa-solid fa-right-from-bracket"></i>
                                <texto style="color: white">Encerrar Sessão</texto>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</head>

<body>




    <div class="mural">


    <div class="color_fundo">
                <div class="parallax">

                </div>
                <div class="bloco-paralax" id="intro">
                    <div class="texto_intro">
                        <h1 class="titulo" id="mob">Mapeando o <rosa>Bem</rosa>
                        </h1><br>
                        <h2 class="sub_titulo">Conecte-se com diversas ONGs e escolha a atividade que mais tem a ver com você!</h2>
                    </div>
                </div>
            </div>






        <div class="on-off" id="off">


            

            <div class="informes">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <a href="#anchor-voluntario">
                                <img src="https://www.newyorkfamily.com/wp-content/uploads/2021/10/GettyImages-1175986554-822x822.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="carousel-caption">O que é ser voluntário?</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a href="#anchor-beneficio">
                                <img src="https://media.istockphoto.com/id/1474708790/vector/pensive-male-student-character-sitting-on-floor-with-laptop-and-paper-sheet-thinking-on-task.jpg?s=612x612&w=0&k=20&c=1lR1efScvegGuIImPJy2SdGA1LhibJooICLZIb46HaY=" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="carousel-caption">O que ganho com essas atividades?</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a href="#anchor-vaga">
                                <img src="https://image.freepik.com/vetores-gratis/voluntarios-ajudando-idosos_23-2148583914.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="carousel-caption">A Vaga Perfeita</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="blocos ">
                <div class="esquerdo">
                    <div class="textoEsquerdo">
                        <h1 class="titulo">Gostaria de ser <strong>Voluntário?</strong></h1><br>
                        <h2 class="sub_titulo" id="sub_car">Acompanhe as atividades disponíveis em nossas entidades parceiras.</h2><p class="sub_titulo" id="sub_car">Neste momento, em sua região:</p>
                    </div>
                </div>
                <div class="direito">
                    <div id="carouselExampleCaptions" class="carousel slide" style="background-color: #97979725; text-align: center">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://th.bing.com/th/id/R.6ace8942274419b98fb850824931ecab?rik=YsUU4nWma9RJhQ&riu=http%3a%2f%2fwww.casavilladeifiori.com%2fcasas-de-repouso%2fimagens%2frecreacao-com-idosos-em-asilo-particular.jpg&ehk=dQrtuPq9sKZi5GKi4c%2bwmWa04RZ1dxKezZF3SNHkHwQ%3d&risl=&pid=ImgRaw&r=0" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Casa 1</h5>
                                    <p>Precisamos de ajuda para fazer companhia aos idosos.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://img.freepik.com/fotos-gratis/grupo-de-diferentes-pessoas-oferecendo-se-como-voluntario-em-um-banco-de-alimentos-para-pessoas-pobres_23-2149012209.jpg?t=st=1717717355~exp=1717720955~hmac=084fb9bdec18204a265cd9ce05d1e9b42aeaed5e15b922d3ff815c11a22a0622&w=1380" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Casa 2</h5>
                                    <p>Estamos precisando de doações! Venha nos conhecer!</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.ilhanoticias.com.br/uploads/imagens/shares/noticias/anteriores/7c8b20525f41e6a8d59910b6cd6e1ae1.jpg.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Casa 3</h5>
                                    <p>Venham nos ajudar com atividades de recreação!</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://img.freepik.com/fotos-gratis/mulher-brincando-com-caes-de-resgate-em-abrigo_23-2148682984.jpg?w=1480&t=st=1717716506~exp=1717717106~hmac=e9e0579eefe8c1eef4c928783fa5f8006f0cb2a7c62e2baf07a4b99ef951fdd1" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Casa 4</h5>
                                    <p>Estaremos com um evento de adoção neste final de semana. ajude-nos!</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>


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
            </div>
            <div class="container" id="anchor-voluntario">
                <div class="row">
                    <div class="col-12" id="anchor">
                        <h3 class="main-title">O que é ser voluntário</h3><br>
                    </div>
                    <div class="main-title-linha">
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="https://www.newyorkfamily.com/wp-content/uploads/2021/10/GettyImages-1175986554-822x822.jpg" alt="voluntariar">
                    </div>
                    <div class="col-md-6">
                        <h3 class="sobrenos-titulo">Doe seu tempo e habilidades em prol de uma ação social.</h3><br>
                        <h6>O voluntariado é uma ação transformadora que beneficia tanto a quem recebe quanto a quem se doa.</h6>
                        <h6>Através da doação de seu tempo, habilidades e conhecimentos, o voluntário contribui para o bem-estar da comunidade e para o seu próprio desenvolvimento pessoal e profissional, através das experiências adquiridas.</h6>
                    </div>
                </div>
            </div>
            <div class="container" id="anchor-beneficio">
                <div class="row">
                    <div class="col-12" id="anchor">
                        <h3 class="main-title">O Que Ganho Com Essas Atividades?</h3>
                    </div>
                    <div class="main-title-linha">
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="https://media.istockphoto.com/id/1474708790/vector/pensive-male-student-character-sitting-on-floor-with-laptop-and-paper-sheet-thinking-on-task.jpg?s=612x612&w=0&k=20&c=1lR1efScvegGuIImPJy2SdGA1LhibJooICLZIb46HaY=" alt="voluntariar">
                    </div>
                    <div class="col-md-6">
                        <h3 class="sobrenos-titulo">Impulsione seu desenvolvimento pessoal e profissional</h3><br>
                        <h6>Participação em formações pedagógicas contínuas e eventos;
                            Descoberta de novas potencialidades;
                            Criação de novos círculos de amizades pessoais;
                            Participação na construção de realidades mais justas;
                            Comprovação de horas complementares para formação em nível de graduação e/ou diferencial para realização de intercâmbio acadêmico;</h6>
                        <h6>texto</h6>
                        <h6>texto</h6>
                    </div>
                </div>
            </div>
            <div class="container" id="anchor-vaga">
                <div class="row">
                    <div class="col-12" id="anchor">
                        <h3 class="main-title">Escolhendo a Vaga Perfeita</h3>
                    </div>
                    <div class="main-title-linha">
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="https://image.freepik.com/vetores-gratis/voluntarios-ajudando-idosos_23-2148583914.jpg" alt="vaga_perfeita">
                    </div>
                    <div class="col-md-6">
                        <h3 class="sobrenos-titulo">Ajude a quem precisa realizando atividades que você se identifica.</h3><br>
                        <h6>A chave para encontrar a vaga certa é focar nas atividades em que você se sentiria mais motivado em realizar.</h6>
                        <h6>Como um quebra cabeça, analise bem o que se encaixa no seu perfil e será como encontrar a peça que estava faltando!</h6>
                        <h6>Alinhe bem com seus interesses, habilidades e disponibilidade. Pense bem na causa que você deseja apoiar e tudo ficará mais claro!</h6>
                    </div>
                </div>
            </div>




            <div class="OnorOff" id="ancho-botao-ocultar">
                <button id="botao-ocultar" name="botao-ocultar"><i class="fa-solid fa-caret-up"></i></button>

            </div>
        </div>


        <div class="on">

            <div class="OnorOff">
                <button style="display: none;" id="botao-mostrar" name="botao-mostrar"><i class="fa-solid fa-caret-down"></i></button>

            </div>




            <div class="baixo">



                <script type="module" src="../controllers/funcoes.js"></script>

                <h1 class="main-title" id="anchor-linhadotempo">Linha do Tempo</h1>

                <main class="main">
                    <!-- formulario de envio -->
                    <div class="newPost">
                        <div class="infoUser">
                            <div class="imgUser">

                            </div>
                            <div class="nomeuser"><?php echo "<Strong class='nomeUser'>" . $nomeusuario . "</Strong>" ?></div>
                        </div>
                        <div>



                            <img id="myimg" src="./voluntarios-produtos.jpg" class="imgpost" onerror="this.style.display = 'none'" alt="">


                        </div>
                        <form action="tela_inicial.php" method="post" class="formPost" id="idformpost">
                            <textarea class="textarea" name="textarea" id="idtextarea" placeholder="Vamos mudar o mundo?" cols="30" rows="10"></textarea>



                            <div class="iconsAndButton">

                                <div class="btnimg">


                                    <button class="buttonadd" type="button" data-bs-toggle="modal" data-bs-target="#addarquivo">
                                        <span class="text">Adicionar</span><span class="icon"><i class="fa-solid fa-folder-plus"></i></span>

                                    </button>


                                    <!-- Modal -->

                                    <div class="modal fade" id="addarquivo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                                        <div class="modal-dialog" role="document">

                                            <div class="modal-content">

                                                <div class="modal-header">

                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">

                                                 
                                                        <input type="file" name="image"  id="imagem">

                                                    



                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button id="buttonaddimagem" type="button" class="btn btn-primary">Save changes</button>
                                                </div>

                                            </div>

                                        </div>

                                    </div>


                                </div>

                                <button type="submit" id="btnpub" class="button-pub">
                                    <div class="svg-wrapper-1">
                                        <div class="svg-wrapper">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <span>Publicar</span>
                                </button>

                            </div>
                        </form>
                    </div>


                    <div class="chatbox-wrapper">
                        <div class="chatbox-toggle">
                            <i class="fa-solid fa-message"></i>

                        </div>
                        <div class="chatbox-menssage-wrapper">
                            <div class="chatbox-menssage-header">
                                <div class="chatbox-menssege-profile">
                                    <div class="div">
                                        <img class="chatbox-message-imagem" src="./css/assets/perfil.png" alt="">
                                        <h4 class="chatbox-message-name">Bot</h4>
                                        <p class="chatbox-message-status">online</p>
                                    </div>
                                </div>
                            </div>
                            <div class="chatbox-message-content">

                                <h4 class="chatbox-message-no-message">Tire suas duvidas aqui!</h4>



                            </div>
                            <div class="chatbox-message-bottom">
                                <form action="#" class="chatbox-message-form">
                                    <textarea name="" id="" rows="1" placeholder="escreva algo" class="chatbox-message-input"></textarea>


                                    <button class="chatbox-message-submit" type="submit"><i class="fa-solid fa-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>



                <div class="posteant">

                    <?php

                    $quantidadedepost = quantidadedeposts();
                    $conteudo_post = array();
                    $files_post = array();
                    $email_post = array();
                    $id_post = array();

                    for ($i = 1; $quantidadedepost + 1 > $i; $i++) {
                        $conteudo_post[] = (($i * 5) - 4) - 1;
                        $files_post[] = (($i * 5) - 3) - 1;
                        $email_post[] = (($i * 5) - 2) - 1;
                        $nome_post[] = (($i * 5) - 1) - 1;
                        $id_post[] = (($i * 5));
                    }

                    $post_one = Exibirposts();

                    $post_supremo = array();
                    $post_ultra = array();
                    foreach ($post_one as $post) {
                        $post_supremo[] = $post;
                    }
                    for ($i = 0; $i < quantidadedeposts(); $i++) {

                        foreach ($post_supremo[$i] as $elemento) {
                            $post_ultra[] = $elemento;
                        }
                    }

                    for ($i = 0; $i < count($conteudo_post); $i++) {

                        Telainicial($post_ultra[$nome_post[$i]], $post_ultra[$conteudo_post[$i]], $post_ultra[$files_post[$i]]);
                    }

                    ?>
                </div>

            </div>
        </div>















<?php 

    $varseila = $_POST['data'];

    $dados = json_decode($varseila, true);

    var_dump($dados);



?>



        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        -->
    </div>



</body>

</html>