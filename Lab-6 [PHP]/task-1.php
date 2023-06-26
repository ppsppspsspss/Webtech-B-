<?php

    $conn = mysqli_connect('localhost:3308', 'root', '', 'LabTask');

    $name = $_POST['name'];
    $buyingPrice = floatval($_POST['bPrice']);
    $sellingPrice = floatval($_POST['sPrice']);
    if(isset($_POST['display'])) $display = 'yes';
    else $display = 'no';


    $sql = "insert into ProductInfo values('', '{$name}', {$buyingPrice}, {$sellingPrice}, '{$display}')";
    $update = mysqli_query($conn, $sql);

?>