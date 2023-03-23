<?php

    include "../conn/conn.php";

   $idpro = $_POST['id'];

$sql = "SELECT * FROM product INNER JOIN typee ON product.pro_type = typee.type_id where pro_id = '$idpro'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$data_arr = array();
$data_arr['result'] = array();


while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    extract($row);

    $data_item = array(

        "id" => $pro_id,
        "name" => $pro_name,
        "num" => $pro_num,
        "price" => $pro_price,
        "img" => $pro_image,
        "type" => $pro_type,
        "type_name" => $type_name


    );
    array_push($data_arr['result'],$data_item);
}
echo json_encode($data_arr);







?>