<?php

        $id = $_POST['id'];
        include "../config.php";

        $sql = "DELETE FROM header_info WHERE id = {$id}";
        // $result = mysqli_query($conn,$sql) or die("SQL Query Failed");
        if(mysqli_query($conn, $sql)){
            echo 1;
        }
        else{

            echo 0;
        }


?>