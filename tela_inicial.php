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
    <title>Document</title>

    <!-- Barra de Navegação (NÃO CONSEGUI FAZER O BAGULHO DO LADO ABRIR) -->
    <nav style="background: rgb(219 164 234)" class="navbar fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/tela_inicial.php"><img src="./css/assets/mob.png" width="60" height="30" class="d-inline-block align-top" alt="" class="nav-item"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
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
</head>

<body>

    <div class="mural" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; align-items: center; color: #460758">
        <label>
            <img src="./css/assets/logomob.png" alt="logo">
        </label>
        <div>
            <hr style="color: #313131bd">
            <br><h1>Gostaria de ser Voluntário?</h1>
            <h2 style="font-size: 20px;">Veja aqui as atividades disponíveis em tempo real:</h2><br>

            <!-- Carrossel 1 -->
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

        <!-- Carrossel 2 -->
        <div style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; align-items: center;">

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

            </div>

            <!-- Carrossel 3 -->
            <div>

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



        </div>



</body>

</html>