<?php

    include "../conn/conn.php";



  $sql = "SELECT * FROM product INNER JOIN typee ON product.pro_type = typee.type_id ORDER BY pro_id ASC";
  $stmt = $conn->prepare($sql);
  $stmt->execute();


  $data_arr = array();
  $data_arr['result'] = array();

  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      extract($row);


      $data_item = array(
        "id" => $pro_id,
        "name" => $pro_name,
        "price" => $pro_price,
        "num" => $pro_num,
        "img" => $pro_image,
        "type" => $pro_type,
        "type_name" => $type_name 



      );
      array_push($data_arr['result'],$data_item);
  }
  echo json_encode($data_arr);



?>