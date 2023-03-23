<?php

    include "../conn/conn.php";



  $ref = $_POST['ref'];

    $sql = "DELETE FROM product where pro_id = '$ref'";
    $stmt = $conn->exec($sql);

    echo json_encode("DEL 200");

?>