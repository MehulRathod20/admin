<?php

include "../../../../Auth/config.php";
$menuid = $_POST['id'];
$menu = $_POST['menu'];
$sql = "UPDATE header_menu SET menu = '{$menu}' WHERE id = {$menuid}";
// $result = mysqli_query($conn,$sql) or die("SQL Query Failed");

if (mysqli_query($conn, $sql)) {
    echo 1;
} else {

    echo 0;
}
mysqli_close($conn);
