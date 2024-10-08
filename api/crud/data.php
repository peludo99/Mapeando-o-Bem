<?php 

require_once('./helper.php');

$query = "select * from cadastros";
$sql = mysqli_query($db_connect, $query);


if($sql)
{
    $result = array();

    while ($row = mysqli_fetch_array($sql)){
        array_push( $result, array(
            'nick' => $row['nick'],

            'email' => $row['email'],

            'senha' => $row['senha'],

            'idcadastro' => $row['idcadastro'],
            
            // 'img_perfil' => $row['img_perfil'],

            

        ));
    }

    echo json_encode(array('notes' =>$result));
}

?>