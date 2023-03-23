<?php

    include "../conn/conn.php";

    $sql = "SELECT * FROM order_product ORDER BY or_id DESC LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt ->execute();
    $data_arr = array();
    $data_arr['result'] = array();
    while($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
        extract($row);

        $data_item = array(
            "id" => $or_id,
            "name" => $or_name,
            "price" => $or_price,
            "num" => $or_num,
            "img" => $or_img


        );

        array_push($data_arr['result'],$data_item);


    }

    echo json_encode($data_arr);




?>