<?php

require_once('../controllers/funcoes.php');
session_start();
$nomeusuario = $_SESSION['user'];
$email = $_SESSION['email'];
$id = $_SESSION['id'];

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
<html lang="en">

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
    <script type="module" src="../controllers/funcoes.js"></script>
    <title>Document</title>




    <!-- Barra de Navegação -->
    <nav style="background: rgb(219 164 234)" class="navbar fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/tela_inicial.php"><img src="./css/assets/mob.png" width="60" height="30" class="d-inline-block align-top" alt=""></a>
            <tr class="navbar-nav me-auto mb-2 mb-lg-0">
                <td class="nav-item">
                    <a class="nav-link" aria-current="page" href="#anchor-quemsomos">Quem somos</a>
                </td>
                <td class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Quem somos</a>
                </td>
            </tr>
            <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="fa-solid fa-ellipsis-vertical"></i>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                </div>
            </div>
        </div>
    </nav>



    <!-- Barra de navegação - Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
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

                            echo"<a class='btn btn-outline-primary' style='border: 1px solid rgb(59, 3, 50);  color:rgb(204, 50, 171);'' href='./usuario.php?'><i class='fa-solid fa-gear'>"
                            
                            
                            
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


    <style>
        /* ------------- BARRA DE NAVEG ------------- */

        .logo {
            width: 25px;
            height: 25px;
        }

        .modal {
            margin-left: 70%;
            width: 30%;
        }

        .btn-outline-primary:hover {
            background-color: rgb(59, 3, 50);
        }

        .btn-outline-primary {
            background-color: #19afddbd
        }

        .modal-content {
            width: 30%;
            background: rgb(219 164 234)
        }

        .modal-header {
            border: none;
        }

        .modal-footer {
            border: none;
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

        .nav-item {
            margin: 20px;

            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 20px;
            font-weight: bold;
        }

        /* ---------------- CORPO DO MURAL ---------------- */

        text {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 15px;
        }

        .topo img {
            width: 80%;
            margin: 20px;
        }

        /* ---------------- VOLUNTARIADO ---------------- */

        .blocos {
            background-color: #ff6edb15;
        }

        .direito {
            margin: 50px;

            img {
                border: 2px solid black;
                border-radius: 15px;
                height: 500px;
                background-color: white;
            }
        }

        .esquerdo {
            width: 900px;
            margin: 20px;
            margin-left: 70px;

            h1 {
                color: #444;
                font-size: 35px;
                position: relative;
            }

            strong {
                color: #a71aac;
            }

            h2 {
                color: #444;
                font-size: 25px;

            }
        }

        .carousel-caption {
            background-color: #272727be;
        }

        /*  ---------------- INFORMES ----------------  */

        .informes {
            background-color: white;
            margin: 80px;

        }

        .card {
            border-radius: 8%;
            background-color: #00d9ff15;
            border: 20px outset #00d9ff15;
            margin-top: 100px;
            margin-left: 75px;
            margin-bottom: -140px;
            width: 330px;
            height: 330px;

        }

        .card:hover {
            width: 320px;
            height: 320px;
            -xpedu-transform: rotatez(10deg);
            -ms-transform: rotateZ(10deg);
            transform: rotateZ(10deg);
        }

        .card-caption {
            background-color: orange;
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

        .posteant{
            display: flex;
            flex-direction: column-reverse;
        }

        /* ----------------------------------------------- */
    </style>


</head>

<body style="background-repeat: repeat-y;">

    <div class="mural">
        <div class="topo">
            <label>
                <img src="./css/assets/logomob.png" alt="logo" style="width: 200;">
            </label>
        </div>

        <div class="blocos">
            <div class="esquerdo">
                <div class="textoEsquerdo">
                    <h1>Gostaria de ser <strong>Voluntário?</strong></h1><br>
                    <h2>Em nossa plataforma você pode se <strong>conectar</strong> com diversas <i>ONGs</i> e escolher a atividade que mais <u>tem a ver com você</u>!</h2>
                    <br>
                    <h2>Veja em tempo real as atividades disponíveis em sua região:</h2>
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
                            <img src="https://euclideseder.com.br/wp-content/uploads/2021/05/Merenda-1.jpeg" class="d-block w-100" alt="...">
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
                            <img src="https://th.bing.com/th/id/R.d133f0a8766d5cfc975f67935dbfe3c1?rik=xk%2bIitWisHcEmw&pid=ImgRaw&r=0" class="d-block w-100" alt="...">
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
                    <h3 class="main-title">O que é ser voluntário</h3>
                </div>
                <div class="main-title-linha">

                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="https://www.newyorkfamily.com/wp-content/uploads/2021/10/GettyImages-1175986554-822x822.jpg" alt="voluntariar">
                </div>
                <div class="col-md-6">
                    <h3 class="sobrenos-titulo">Ser voluntário....</h3><br>
                    <h6>texto</h6>
                    <h6>texto</h6>
                    <h6>texto</h6>
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
                    <h3 class="sobrenos-titulo">Benefícios....</h3><br>
                    <h6>texto</h6>
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
                    <h3 class="sobrenos-titulo">A melhor vaga para você....</h3><br>
                    <h6>texto</h6>
                    <h6>texto</h6>
                    <h6>texto</h6>
                </div>
            </div>
        </div>

        <div class="baixo">

            <h1 class="main-title" id="anchor-linhadotempo">Linha do Tempo</h1>

            <main class="main">
                <!-- formulario de envio -->
                <div class="newPost">
                    <div class="infoUser">
                        <div class="imgUser">

                        </div>
                        <?php echo "<Strong class='nomeUser'>" . $nomeusuario . "</Strong>" ?>
                    </div>
                    <form action="tela_inicial.php" method="post" class="formPost" id="idformpost">
                        <textarea class="textarea" name="textarea" id="idtextarea" placeholder="Vamos mudar o mundo?" cols="30" rows="10"></textarea>



                        <div class="iconsAndButton">

                            <div class="btnimg">

                                <button type="file" class="buttonadd"><span class="text">Adicionar</span><span class="icon"><i class="fa-solid fa-folder-plus"></i></span></button>

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
    
            Telainicial($post_ultra[$nome_post[$i]], $post_ultra[$conteudo_post[$i]]);
        }
    
        ?>
</div>
  
 </div>
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