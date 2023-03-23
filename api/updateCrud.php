<?php

    include "../conn/conn.php";

 
    $ref = $_POST['eid'];
    $name = $_POST['ename'];
    $price  =$_POST['eprice'];
    $num  = $_POST['enum'];
    $type = $_POST['etype'];



    $sql = "UPDATE product SET pro_name = '$name', pro_price = '$price', pro_num = '$num', pro_type ='$type' WHERE pro_id = '$ref'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();


    echo json_encode("Update complete");

?>