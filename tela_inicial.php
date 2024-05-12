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
    <script type="module" src="./js/FormPost.js"></script>
    <title>Document</title>

    <!-- Barra de Navegação (NÃO CONSEGUI FAZER O BAGULHO DO LADO ABRIR) -->
    <nav style="background: rgb(219 164 234)" class="navbar fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/tela_inicial.php"><img src="./css/assets/mob.png" width="60" height="30" class="d-inline-block align-top" alt="" class="nav-item"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>



    <!-- Modal -->
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



                            <a class="btn btn-outline-primary" style="border: 1px solid rgb(59, 3, 50);  color:rgb(204, 50, 171);" href="#"><img class="logo" src="css/assets/home_2544087.png" alt="">
                                <texto style="color: white">Entidades Parceiras</texto>
                            </a>

                            <a class="btn btn-outline-primary" style="border: 1px solid rgb(59, 3, 50); color:rgb(204, 50, 171);" href="#">
                                <img class="logo" src="css/assets/donate_1655108.png" alt="">
                                <texto style="color: white"> Ajude-nos
                            </a></texto>




                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <style>
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

        texto {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 15px;
        }

        .logo {

            width: 25px;
            height: 25px;

        }

        .btn {
            margin: 4px;

        }

        .direito {


            margin: 10px;

            img {
                border: 2px solid black;
                border-radius: 15px;
                width: 500px;
                height: 400px;
                background-color: white;
            }
        }
    </style>


</head>

<body style="background-repeat: repeat-y;">



    <div class="mural">
        <div class="topo">

            <label>
                <img src="./css/assets/logomob.png" alt="logo">
            </label>
        </div>


        <div class="blocos">

            <div class="esquerdo">



                <div class="textoEsquerdo">
                    <h1>Gostaria de ser Voluntário?</h1>
                    <h2 style="font-size: 20px;">Veja aqui as atividades disponíveis em tempo real:</h2><br>
                </div>



            </div>

            <div class="direito">

                <div id="carouselExampleCaptions" class="carousel slide" style="background-color: #97979725; text-align: center">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://cdn.churchplants.com/wp-content/uploads/2018/05/forgottenstepstokidmin.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Casa 1</h5>
                                <p>Precisamos de ajuda para fazer companhia aos idosos.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://th.bing.com/th/id/OIP.lHOXU7yoSFYK37kirQTJcAHaE8?rs=1&pid=ImgDetMain" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Casa 2</h5>
                                <p>Estamos precisando de doações! Venha nos conhecer!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://vomo-core-web.s3.amazonaws.com/media/2019/10/2110-ge2gKEsM-l.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Casa 3</h5>
                                <p>Hoje tivemos aula de pintura para os idosos.</p>
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

        <div class="baixo">





            <!-- Carrossel 1 -->

            <!-- Carrossel 2 -->
            <!-- <div style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; align-items: center;">
    
                    <br>
                    <h1>Aceitamos doações!</h1>
                    <h2 style="font-size: 20px;">Veja do que as Casas de Apoio estão precisando no momento:</h2><br>
                    <div id="carouselExampleCaptions" class="carousel slide" style="background-color: #97979725;">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://ak.picdn.net/shutterstock/videos/1047082747/thumb/1.jpg" class="d-block w-100" alt="..." style="align-items: center;">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Casa 1</h5>
                                    <p>Estamos precisando de alimentos</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://media.defense.gov/2023/Feb/27/2003168300/2000/2000/0/230223-F-WT312-6055.JPG" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Casa 2</h5>
                                    <p>Estamos precisando de doações! Venha nos conhecer!</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./css/assets/casinhabola.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Casa 3</h5>
                                    <p>Hoje tivemos aula de pintura para os idosos.</p>
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
    
                    </div> -->

            <!-- Carrossel 3 -->
            <!-- <div>
    
                        <br>
                        <h1>Fique por dentro das novidades!</h1>
                        <h2 style="font-size: 20px;">Visite nosso fórum e conheça novas instituições. Acompanhe em tempo real o que vem sendo realizado:</h2><br>
    
                        <div id="carouselExampleCaptions" class="carousel slide" style="background-color: #97979725;">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://4.bp.blogspot.com/-QDN7aAJFfVU/UyxL1dUcDxI/AAAAAAAAHh8/0cgV_FADoas/s1600/Taller+Selva+Amaz%C3%B3nica+13+14+011.JPG" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Casa 1</h5>
                                        <p>Hoje foi pura arte no maternalzinho</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://th.bing.com/th/id/OIP.t3p5Tief0h_7nn-o6_Z9HwHaDw?rs=1&pid=ImgDetMain" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Casa 2</h5>
                                        <p>Nossa oficina de crochê foi um sucesso</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://th.bing.com/th/id/OIP.ArBiSY1BsCZW2IT8pwduVgHaE8?rs=1&pid=ImgDetMain" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Casa 3</h5>
                                        <p>Atividade recreação</p>
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
    
    
    
                </div> -->


            <h1>Linha do Tempo</h1>

            <main class="main">
                <!-- formulario de envio -->
                <div class="newPost">
                    <div class="infoUser">
                        <div class="imgUser">

                        </div>
                        <Strong class="nomeUser">Cauan abraao</Strong>
                    </div>
                    <form action="tela_inicial.php" method="post" class="formPost" id="idformpost">
                        <textarea class="textarea" name="textarea" id="idtextarea" placeholder="Vamos mudar o mundo?" cols="30" rows="10"></textarea>



                        <div class="iconsAndButton">

                            <div class="btnimg">

                                <button class="buttonadd"><span class="text">Adicionar</span><span class="icon"><i class="fa-solid fa-folder-plus"></i></span></button>

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
        </div>

        <?php

        require_once 'conexao.php';
        // Mesclar Funcoes de conexao.php

        $p = new Pessoa('test', 'localhost', 'root', '');


        if (isset($_POST['textarea'])) {

            $conteudo = $_POST['textarea'];
            if ($p->addPost($conteudo)) {
            } else {
                echo "erro";
            }
        }





        ?>




        <div class="mainpost">
            <!-- formulario de envio -->
            <ul class="Post" id="posts">

            </ul>
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