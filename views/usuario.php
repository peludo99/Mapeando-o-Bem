 <?php
    require_once '../controllers/funcoes.php';

    session_start();
    $nome_usuario = $_SESSION['user'];
    $id_user = $_SESSION['id'];












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


    body{
        
        overflow-x: hidden;
    }
        
         .editusuario {

             background: white;
             width: 45%;
             height: auto;
             margin-left: auto;
             margin-right: auto;
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
             margin-left: 80px;
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

         .label {
             align-self: flex-start;
             color: var(--clr);
             font-weight: 600;
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
             margin-left: 150px;
             margin-right: 150px;
             margin-top: 10px;
             margin-bottom: 10px;
             padding: 0px;
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
             font-size: 23px;
             margin-top: 35px;
             padding: 5px;
         }

         .btn-outline-primary {
             background-color: rgb(238, 84, 204);

         }

         .btn-outline-primary:hover,
         .btn-outline-primary:active {

             background-color: rgb(145, 7, 122);

         }
     </style>

 </head>



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
                    }
                }
            } else {
                Mensagems("CEP incompleto", "danger");
            }
        }
    }


    $dados_bruto = BuscarDadosCadastro1($id_user);
    $dados = array();

    for ($i = 0; $i < count($dados_bruto); $i++) {

        foreach ($dados_bruto[$i] as $elemento) {
            $dados[] = $elemento;
        }
    }






    ?>


 <body style="aling-item:center">


     <div class="editusuario">

         <div class="header">
             <H1>Perfil</H1>
             <?php echo "<h2>$nome_usuario</h2>"; ?>
             <img class="foto" src="css/assets/perfil.png" alt="">
         </div>

         <div class="about">
             <h1>Sobre mim:</h2>
                 <p> Gosto de desenvolver atividades de voluntariado em minhas horas vagas. <br>Atualmente tenho mais contato com <strong>abrigos de animais</strong> e <strong>asilos</strong>.</p>
         </div>


         <?php
            ?>

         <div class="social">
             <p>Me acompanhe:</p>
             <i class="fa-brands fa-square-instagram"></i>
             <i class="fa-brands fa-square-facebook"></i>
         </div>

         <div class="modificacoes">
             <form class="form" action="../views/usuario.php" method="post">
                 <h2>Informações Pessoais</h2>

                 <span class="input-span">
                     <label for="nome" class="label">Nome</label>
                     <input type="text" name="nome" id="nome" value="<?php echo $dados[0]; ?>"></span>
                 <span class="input-span">
                     <label for="cep" class="label">CEP</label>
                     <input type="text" name="cep" id="cep" placeholder="Digite seu cep" value="<?php echo $dados[3]; ?>"></span>
                 <span class="input-span">
                     <span class="input-span">
                         <label for="rua" class="label">Rua</label>
                         <input type="text" name="rua" id="rua" placeholder="Digite sua Rua (opcional)" value="<?php echo $dados[4]; ?>"></span>
                     <span class="input-span">

                         <label for="bairro" class="label">Bairro</label>
                         <input type="text" name="bairro" id="bairro" placeholder="Digite seu Bairro (opcional)" value="<?php echo $dados[5]; ?>"></span>
                     <span class="input-span">

                         <label for="estado" class="label">Estado</label>
                         <input type="text" name="estado" id="estado" placeholder="Digite seu Estado (opcional)" value="<?php echo $dados[6]; ?>"></span>



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

                         <a href="../views/tela_inicial.php" id="Idcadastro" style="border: 1px solid rgb(238, 84, 204);width:400px; color:rgb(255, 255, 255);margin-top: 2%; background-color: rgb(238, 38, 38);" class="btn btn-outline-primary">voltar</a>




                     </div>
             </form>


         </div>




     </div>








 </body>

 </html>