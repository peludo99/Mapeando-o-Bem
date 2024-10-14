<?php


require_once '../models/conexao.php';

$pasta_atual = __DIR__;
$pasta_raiz = dirname($pasta_atual);
require_once "$pasta_raiz"."\banco\define.php";

$conexao = new Conexao(DB,HOST,USER,PASS);


function Buscardadosdelogin($email, $senha)
{
    global $conexao;

    $conexao->BuscarDadosSenha($email, $senha);


    return $conexao->BuscarDadosSenha($email, $senha);
};



function Buscardadosdecadastro($email)
{
    global $conexao;

    if ($conexao->BuscarDados($email)) {


        return $conexao->BuscarDados($email);
    }
};

function  DadosPermissoes($email)
{
    global $conexao;
    if ($conexao->BuscarDadosPermissoesSIM($email) == null or $conexao->BuscarDadosPermissoesSIM($email) == '') {
        return "no";
    } else {

        return "yes";
    }
}

function Buscarimgperfil($email)
{
    global $conexao;
    $valor = $conexao->buscarimguser($email);

    return $valor;
}

function Buscarimgperfilbyid($id)
{
    global $conexao;
    $valor = $conexao->buscarimguserbyid($id);

    return $valor;
}



function CadastrarUsuarios($nome, $email, $senha)
{
    global $conexao;

    if ($conexao->Cadastrarusuario($nome, $email, $senha)) {


        return true;
    }
};


function AdicionarPost($conteudo, $file, $email, $nomeusuario, $data, $id)
{
    global $conexao;

    if ($conexao->addPost($conteudo, $file, $email, $nomeusuario, $data, $id)) {

        return true;
    }
};


function Exibirposts()
{
    global $conexao;
    $resultado = $conexao->Buscarpost();

    return   $resultado;
};



function Exibirpostsbyid($id)
{
    global $conexao;
    $resultado = $conexao->Buscarpostbyid($id);

    return   $resultado;
};


function Telainicial($post_user, $post, $post_img_user, $data_post, $id)
{

    $imagemperfil =   Buscarimgperfilbyid($id);;

    $imagemperfil1 = array();

    for ($i = 0; $i < count($imagemperfil); $i++) {

        foreach ($imagemperfil[$i] as $elemento) {
            $imagemperfil1[] = $elemento;
        }
    }














    date_default_timezone_set('America/Sao_Paulo');




    echo "<ul class='Post' id='posts'>";
    echo "<div class='infoUser'>";
    
    if (!end($imagemperfil1) == null) {
        echo '<img class="imgUser" src="' . end($imagemperfil1) . '" alt="">';
    } else {

        echo '<img class="imgUser"  src="./css/assets/perfil.jpg" alt="">';
    }

   
    echo "  <div class='nomeuser'>
     <Strong class='nomeuser'> 
     <a style='text-decoration: none;'  class='nomeuser' href='./cateto.php?id=" . $id . "'>" . $post_user . "</a> </div> </Strong>";

    echo " </div>";

    if (!$post_img_user == '') {


        echo " <img id='myimg' style='margin-top: 20px;' src='" . $post_img_user . "' class='imgpost'>";
    } else {
    } {
    }






    echo " <li class='formPostA'>";
    echo " <stron>" . $post . "";
    echo "  </stron>";
    echo "  <div class='hora'>";

    echo "     <hora> " . $data_post . "</hora>";
    echo " </div>";
    echo "<div class='iconsAndButton'>";
    echo "<div class='btnpost'>";
    echo " <button type='button' class='share-button'>";
    echo " <span class='button__text'>Curtir</span>";
    echo "  <span class='button__icon'>";

    echo " <i class='fa-solid fa-heart'></i>";
    echo "  </span>";
    echo " </button>";
    echo " <button style='width: 100px;' type='button' class='share-button'>";
    echo " <span class='button__text'>Comentar</span>";
    echo " <span class='button__icon'>";

    echo " <i class='fa-solid fa-comments'></i>";
    echo "  </span>";
    echo "  </button>";
    echo " <button style='width: 120px;' type='button' class='share-button'>";
    echo " <span class='button__text'>Compartilhar</span>   ";
    echo "<span class='button__icon'>";

    echo " <i class='fa-solid fa-share-nodes'></i>";
    echo " </span>";
    echo " </button>";

    echo " </div>";


    echo "  </div>";
    echo "  </li>";
    echo "</ul>";
};

function Buscardadosimagem($email)
{
    global $conexao;
    $resultado = $conexao->Buscarimagem($email);

    return $resultado;
}

function Buscartextoimagem($email)
{
    global $conexao;
    $resultado = $conexao->Buscarimagemtexto($email);

    return $resultado;
}

function Deletarimg($email)
{

    global $conexao;
    $conexao->Deletartudo($email);
}

function userAddpost($file, $email)
{
    global $conexao;
    $conexao->adduserpost($file, $email);
}




function quantidadedeposts()
{
    $todos = Exibirposts();
    $dados = array();

    for ($i = 0; count($todos) > $i; $i++) {

        foreach ($todos[$i] as $conteudo) {
            $dados[] = $conteudo;
        }
    }

    $quantidadedeposts = count($dados);

    return $quantidadedeposts / 7;
}


function quantidadedepostsbyid($id)
{
    $todos = Exibirpostsbyid($id);
    $dados = array();

    for ($i = 0; count($todos) > $i; $i++) {

        foreach ($todos[$i] as $conteudo) {
            $dados[] = $conteudo;
        }
    }

    $quantidadedeposts = count($dados);

    return $quantidadedeposts / 7;
}



//  $files_post[] = (($i * 4) - 2) - 1;
// 
//  $id_post[] = (($i * 4)) - 1;


// $files_post = array();
// $email_post = array();
// $id_post = array();



function BuscarDadosCadastro1($id)
{

    global $conexao;
    $res = $conexao->Buscarcadastro1($id);

    return $res;
}


function Alterardados($nome, $email, $senha, $rua, $cep, $estado, $bairro, $id)
{
    global $conexao;
    $conexao->Alterarcadastro($nome, $email, $senha, $rua, $cep, $estado, $bairro, $id);
}


function AdicionarImagem($imagem, $username, $text)
{
    global $conexao;
    $conexao->Post_temp($imagem, $username, $text);
}




function Mensagems($mensagem, $tipo)
{

    echo "<div class='alert alert-$tipo' role='alert'>
                $mensagem
                </div>
                <br>";
}
