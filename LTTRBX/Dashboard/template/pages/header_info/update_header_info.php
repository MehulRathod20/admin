<?php

	include "../../../../Auth/config.php";
        $id = $_POST['hid']; 
        $mob = $_POST['num'];
        $txt = $_POST['text'];
        $sql = "UPDATE header_info SET phone = '{$mob}' , header_text = '{$txt}' WHERE id = '{$id}'";
        // $result = mysqli_query($conn,$sql) or die("SQL Query Failed");
        
        if(mysqli_query($conn, $sql)){
            echo 1;
        }
        else{
    
            echo 0;
        }
    mysqli_close($conn);
	
?>