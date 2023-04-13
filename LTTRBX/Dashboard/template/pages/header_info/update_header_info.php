<?php

include "../config.php";
        $id = $_POST['hid']; 
        $mob = $_POST['num'];
        $txt = $_POST['text'];
        $txt2 = $_POST['text2'];
        $sql = "UPDATE header_info SET phone = '{$mob}' , header_text = '{$txt}', header_text_2 = '{$txt2}' WHERE id = '{$id}'";
        // $result = mysqli_query($conn,$sql) or die("SQL Query Failed");
        
        if(mysqli_query($conn, $sql)){
            echo 1;
        }
        else{
    
            echo 0;
        }
    mysqli_close($conn);
	
?>