<?php

$id = $_GET['id'];

include '../config.php';

    $sql = "DELETE FROM product WHERE id = {$id}";

    $result = mysqli_query($conn, $sql) or die("query unsuccessful");

            header("Location:http://localhost/project/LTTRBX/Dashboard/template/pages/product/product.php");


    mysqli_close($conn);

?>