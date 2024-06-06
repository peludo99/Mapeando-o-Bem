<?php


require_once '../models/conexao.php';

$conexao = new Conexao('test', 'localhost', 'root', '');


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



function CadastrarUsuarios($nome, $email, $senha)
{
    global $conexao;

    if ($conexao->Cadastrarusuario($nome, $email, $senha)) {


        return true;
    }
};


function AdicionarPost($conteudo, $file, $email, $nomeusuario)
{
    global $conexao;

    if ($conexao->addPost($conteudo, $file, $email, $nomeusuario)) {

        return true;
    }
};


function Exibirposts()
{
    global $conexao;
    $resultado = $conexao->Buscarpost();

    return   $resultado;
};

function Telainicial($post_user, $post, $post_img_user)
{


    date_default_timezone_set('America/Sao_Paulo');
    $hoje = date('d/m/Y');
    $hora_atual = date('H:i');


    echo "<ul class='Post' id='posts'>";
    echo "<div class='infoUser'>";
    echo " <div class='imgUser'>";

    echo "  </div>";
    echo "  <div class='nomeuser'> <Strong class='nomeuser'>" . $post_user . " </div> </Strong>";

    echo " </div>";

    if (!$post_img_user == '') {
        $imagem = file_get_contents($post_img_user);

        if ($imagem !== false) {

            echo " <div> <img src='data:image/jpeg;base64,' . base64_encode($imagem) . '> </div>";
        } else {
            echo 'Erro ao carregar a imagem.';
        } {
        }
    }





    echo " <li class='formPostA'>";
    echo " <stron>" . $post . "";
    echo "  </stron>";
    echo "  <div class='hora'>";

    echo "     <hora> Postado em " . $hoje . " as " . $hora_atual . "h </hora>";
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

    return $quantidadedeposts / 5;
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


function Mensagems($mensagem, $tipo)
{

    echo "<div class='alert alert-$tipo' role='alert'>
                $mensagem
                </div>
                <br>";
}
