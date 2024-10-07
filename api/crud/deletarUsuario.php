<?php

require_once("helper.php");
parse_str(file_get_contents('php://input'), $value);



$id = $value['idcadastro'];






if (isset($value['idcadastro'])) {


    // Verifica se id ja existe
    $query = "SELECT idcadastro FROM cadastros WHERE idcadastro = '$id' ";
    $sql = mysqli_query($db_connect, $query);


    if ($sql) {

        $row = mysqli_fetch_array($sql);


        if (!empty($row)) {

            $query = "DELETE FROM cadastros WHERE idcadastro = '$id'";
            $sql = mysqli_query($db_connect, $query);
            if ($sql) {
                echo json_encode(array('Messagem' => "Cadastro Deletado!",'Cod' => '005ex'));
            } else {

                echo json_encode(array('Messagem' => "Não foi possivel deletar o cadastro!"));
            }
        }

        else{

            echo json_encode(array('Mesagem' => 'Não foi possivel deletar o cadastro', 'Cod' => '006ex'));

        }
    } 
} else {

    echo "dados não recebidos";
}






