<?php

    include "../conn/conn.php";



    $sql = "SELECT * FROM typee";
    $stmt = $conn->prepare($sql);
    $stmt->execute();


    $data_arr = array();
    $data_arr['result'] = array();


    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $data_item = array(
            "id" => $type_id,
           
            "name" => $type_name,
            "img" => $type_image
        );
        array_push($data_arr['result'],$data_item);
    }

    

    echo json_encode($data_arr);





?>