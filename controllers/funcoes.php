<?php


require_once '../models/conexao.php';

$conexao = new Conexao('test', 'localhost', 'root', '');


function Buscardadosdelogin($email, $senha)
{
    global $conexao;

    $conexao->BuscarDadosSenha($email, $senha);


    return $conexao->BuscarDadosSenha($email, $senha);
}

function Buscardadosdecadastro($email)
{
    global $conexao;

    if ($conexao->BuscarDados($email)) {


        return $conexao->BuscarDados($email);
    }
}

function CadastrarUsuarios($nome, $email, $senha)
{
    global $conexao;

    if ($conexao->Cadastrarusuario($nome, $email, $senha)) {


        return true;
    }
}
