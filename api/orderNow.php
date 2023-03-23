<?php

    include "../conn/conn.php";

   $refupdate = $_POST['ref'];
   $amount = $_POST['amount'];
    $name = $_POST['name_or'];
    $price = $_POST['price'];
    $img = $_POST['img'];

   $sql = "SELECT pro_num,pro_price FROM product where pro_id = '$refupdate'";
   $stmt = $conn->prepare($sql);
   $stmt->execute();
   while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
       extract($row);

       $num = $pro_num;
        $price_pro = $pro_price;
   }

   $total = $num - $amount;

   $price_total = $price_pro * $amount;


   $sql = "UPDATE product SET pro_num = '$total' WHERE pro_id = '$refupdate'";
   $stmt = $conn->prepare($sql);
   $stmt->execute();

   $sql = "INSERT INTO order_product (or_name,or_price,or_num,or_img )VALUES('$name','$price_total','$amount','$img')";
   $stmt = $conn->exec($sql);

   echo json_encode("Update Insert Succcess");





?>