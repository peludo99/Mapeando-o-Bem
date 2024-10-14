<?php

require_once("helper.php");

$email = $_POST['email'];
$senha = $_POST['senha'];
$nick = $_POST['nick'];  // talves não seja nick



if (isset($_POST['email']) && isset($_POST['nick']) && isset($_POST['senha'])) {


    // Verifica se email ja existe
    $query = "SELECT idcadastro FROM cadastros WHERE email = '$email' ";
    $sql = mysqli_query($db_connect, $query);


    if ($sql) {

        $row = mysqli_fetch_array($sql);


        if (empty($row)) {

            $query = "INSERT INTO cadastros(nick, email, senha) VALUES ('$nick', '$email', '$senha') ORDER BY idcadastro ";
            $sql = mysqli_query($db_connect, $query);
            if ($sql) {
                echo json_encode(array('messagem' => "Usuario Cadastrado!",'cod' => '002ex'));
            } else {

                echo json_encode(array('messagem' => "Não foi Criado!"));
            }
        }

        else{

            echo json_encode(array('messagem' => 'Usuario ja possui cadastro', 'cod' => '001ex'));

        }
    } 
} else {

    echo "dados não recebidos";
}






