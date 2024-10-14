<?php

require_once("helper.php");

$email = $_POST['email'];
$senha = $_POST['senha'];




if (isset($_POST['email']) && isset($_POST['senha'])) {
    if ($email == '' || $email == null) {
        echo "digite algo";
    } else {

        // Verifica se email ja existe
        $query = "SELECT idcadastro FROM cadastros WHERE email = '$email' ";
        $sql = mysqli_query($db_connect, $query);

        if ($sql) {

            $row = mysqli_fetch_array($sql);


            if (empty($row)) {

                //email não existe

                // $query = "INSERT INTO cadastros(nick, email, senha) VALUES ('$nick', '$email', '$senha') ORDER BY idcadastro ";
                // $sql = mysqli_query($db_connect, $query);
                // if ($sql) {
                //     echo json_encode(array('messagem' => "Usuario Cadastrado!",'cod' => '002ex'));
                // } else {

                //     echo json_encode(array('messagem' => "Não foi Criado!"));

                // }

                echo json_encode(array('messagem' => 'Usuario não possui cadastro', 'cod' => '007ex'));
            } else {

                //Email Existe

                //verificar se senha está correta

                $query = "SELECT idcadastro FROM cadastros WHERE email = '$email' and senha = '$senha' ";
                $sql = mysqli_query($db_connect, $query);
                if ($sql) {

                    $row = mysqli_fetch_array($sql);

                    if (empty($row)) {

                        //senha incorreta

                        echo json_encode(array('messagem' => 'Senha incorreta', 'cod' => '009ex'));
                    } else {

                        // email e senha correto
                        $query = "SELECT * FROM cadastros WHERE email = '$email' and senha = '$senha'";
                        $sql = mysqli_query($db_connect, $query);
                        if ($sql) {

                            $row = mysqli_fetch_array($sql);
                            echo json_encode(array('messagem' => 'Usuario encontrado', 'cod' => '008ex', 'nick' => $row['nick']));
                        }
                    }
                }

              
            }
        }
    }
} else {

    echo "dados não recebidos";
}
