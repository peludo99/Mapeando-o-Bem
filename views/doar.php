<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../controllers/jquery-3.7.1.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <script src="https://kit.fontawesome.com/6cb3083259.js" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="./css/assets/icone.ico" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



    <script type="module" src="../controllers/funcoes.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">

    <title>Ajude-nos</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            width: 100vw;
            height: 100vh;
            overflow: hidden;
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

        .letra_grande {
            font-size: 50px;
            font-family: "Poetsen One", sans-serif;
            font-weight: 400;
            font-style: normal;
            color: black;
            align-items: left;
        }

        .titulo>strong {
            color: rgb(238, 84, 204);
        }

        .sub_titulo {
            font-size: 40px;
            font-family: "Poetsen One", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            color: white;
            align-items: center;



        }

        .direita {

            display: flex;
            align-items: flex-end;
            justify-content: flex-end;

            button {
                width: 50px;
                height: 30px;
                background-color: rgba(0, 0, 0, 0);
                border: none;
                border-radius: 5%;


            }

        }

        /* TEXTOS NA FRENTE DA FOTO */
        .anuncio {
            position: absolute;
            width: 600px;
            height: 700px;
            align-content: center;
            top: 13.5%;
            transform: translate(20, -50%);
            left: 15%;



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


        /* CONTÉM AS DIVS DA TELA*/
        .mural {
            display: flex;
            width: 100vw;
            height: 100vh;
            background-color: black;
            overflow: hidden;
        }

        /* FOTO QUE AUMENTA*/
        .imagem {

            width: 100%;
            height: 100%;
            background-image: url(./css/assets/maos.jpg);
            background-repeat: no-repeat;
            background-position: right 35% top 35%;
            background-size: cover;
            object-fit: fill;
            opacity: 70%;
            text-align: center;
        }

        .imagem:hover {
            transform: scale(1.1);
            /* Adiciona um efeito de escala */
            transition: 500ms linear;
        }



        /* MODIFICAÇÕES NO BOX */
        .informes {
            z-index: 10px;
            margin: auto;
        }

        .card {
            border-radius: 8%;
            background-color: white;
            border: 20px outset #00d9ff15;
            padding: 15px;

            top: -30px;
          
          
            left: 50px;
        
            width: 500px;
           
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
            align-items: start;
            justify-content: left;
            
            

            h1 {
                font-size: 35px;
                font-family: "Poetsen One", sans-serif;
                font-weight: 400;
                font-style: normal;
                color: black;

            }

            p {
              
                font-family: "Poetsen One", sans-serif;
                font-weight: 400;
                font-style: normal;
                color: black;

                strong {
                    color: rgb(238, 84, 204);
                }

            }
        }

        .card:hover {
          
           
            -xpedu-transform: rotatez(10deg);
            -ms-transform: rotateZ(10deg);
            transform: rotateZ(3deg);
        }

        .card-caption {
            background-color: orange;
        }



        /* MODIFICAÇÕES DENTRO DO BOX */

        .radio-input input {
            display: none;
        }

        .radio-input label {
            --border-color: gray;

            border: 1px solid var(--border-color);
            border-radius: 6px;
            min-width: 5rem;
            margin: 1rem;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            position: relative;
            align-items: center;
        }

        .radio-input input:checked+label {
            --border-color: rgb(238, 84, 204);
            border-color: rgb(238, 84, 204);
            border-width: 2px;
        }

        .radio-input label:hover {
            --border-color: rgb(238, 84, 204);
            border-color: rgb(238, 84, 204);
        }

        .radio-input {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: column;
        }

        .circle {
            display: inline-block;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: rgb(189, 187, 207);
            margin-right: 0.5rem;
            position: relative;
        }

        .radio-input input:checked+label span.circle::before {
            content: "";
            display: inline;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgb(238, 84, 204);
            width: 15px;
            height: 15px;
            border-radius: 50%;
        }

        .text {
            display: flex;
            align-items: center;
        }

        .price {
            display: flex;
            flex-direction: column;
            text-align: right;
            font-weight: bold;
        }

        .small {
            font-size: 10px;
            color: rgb(136, 138, 139);
            font-weight: 100;
        }

        .info {
            position: absolute;
            display: inline-block;
            font-size: 11px;
            background-color: rgb(31, 236, 123);
            border-radius: 20px;
            padding: 1px 9px;
            top: 0;
            transform: translateY(-50%);
            right: 5px;
        }
    </style>
</head>

<body>
    <!-- Barra de Navegação -->

    <nav style="background: rgb(255, 255, 255); height: 55px; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;" class="navbar navbar-expand-lg fixed-top">



        <a class="navbar-brand" href="#anchor-topo"><img src="./css/assets/mob.png" width="60" height="30" class="d-inline-block align-top" alt=""></a>

        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: -23px;" id="navbarTogglerDemo01">
            <!--Itens da Barra de Navegação -->
            <li class="nav-item dropdown" id="navbarTogglerDemo01">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" id="navbarTogglerDemo01">Redes Sociais</a>
                <div style="width: 180px;text-align: center;border-color: rgb(255, 255, 255);background:rgb(255, 255, 255)" class="dropdown-menu" id="navbarTogglerDemo01">
                    <a style="background:rgb(255, 255, 255); margin:auto" class="dropdown-item" href="https://www.instagram.com/mapeandoobem/" target="_blank" id="navbarTogglerDemo01"><i style="font-size: 22px;" class="fa-brands fa-instagram fa-fade">
                            <nome style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size:20px"> Instagram</nome>
                        </i></a>
                </div>
            </li>
        </ul>

    </nav>


    <div class="mural" id="anchor-topo">

        <div class="imagem">
            <!-- DIV DA IMAGEM. NÃO APAGAR! -->
        </div>


        <div class="anuncio">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card">
                        <h1>Ajude-nos a manter</h1>
                        <h1>as atividades</h1><br>
                        <p>Com o <strong>seu apoio</strong>, poderemos continuar com a iniciativa e <strong>melhorar o dia-a-dia</strong> de inúmeras Casas de Apoio!</p>
                        <!--<img src="https://www.newyorkfamily.com/wp-content/uploads/2021/10/GettyImages-1175986554-822x822.jpg" class="card-img-top" alt="...">-->

                        <div class="card-body" style="margin-left: 20%;">

                            <div class="radio-input" >
                                <input value="value-1" name="value-radio" id="value-1" type="radio" />
                                <label for="value-1" style="background-color:white">
                                    <div class="text">
                                        <span class="circle"></span>
                                        Mensal
                                    </div>
                                    <div class="price">
                                        <span>R$30 / mês</span>
                                        <span class="small">R$360 no ano</span>
                                    </div>
                                </label><input value="value-2" name="value-radio" id="value-2" type="radio" />
                                <label for="value-2" style="background-color:white">
                                    <div class="text">
                                        <span class="circle"></span>
                                        Anual
                                    </div>
                                    <div class="price">
                                        <span>R$15 / mês</span>
                                        <span class="small">$180 no ano</span>
                                    </div>
                                    <span class="info">aproveite 50% off</span>
                                </label>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>


    </div>



</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</html>