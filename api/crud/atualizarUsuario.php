<?php

require_once("helper.php");
parse_str(file_get_contents('php://input'), $value);

$email = $value['email'];
$senha = $value['senha'];
$nick = $value['nick'];  // talves não seja nick
$id = $value['idcadastro'];






if (isset($value['email']) && isset($value['nick']) && isset($value['senha']) && isset($value['idcadastro'])) {


    // Verifica se email ja existe
    $query = "SELECT idcadastro FROM cadastros WHERE email = '$email' ";
    $sql = mysqli_query($db_connect, $query);


    if ($sql) {

        $row = mysqli_fetch_array($sql);


        if (empty($row)) {

            $query = "UPDATE cadastros SET nick = '$nick', email = '$email', senha= '$senha' WHERE idcadastro = '$id'";
            $sql = mysqli_query($db_connect, $query);
            if ($sql) {
                echo json_encode(array('Messagem' => "Cadastrado Atualizado!",'Cod' => '004ex'));
            } else {

                echo json_encode(array('Messagem' => "Não foi possivel atualizar o cadastro!"));
            }
        }

        else{

            echo json_encode(array('Mesagem' => 'Este Email Ja esta sendo usando por outro usuario!', 'Cod' => '003ex'));

        }
    } 
} else {

    echo "dados não recebidos";
}






