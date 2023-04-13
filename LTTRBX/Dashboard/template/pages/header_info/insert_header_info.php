<?php

include "../config.php";

    $mob = $_POST['number']; 
    $txt = $_POST['text'];
    $tx = $_POST['txt'];

         if(!empty($mob) && !empty($txt)&&($tx)){
            $sql = "INSERT INTO header_info (phone, header_text, header_text_2) VALUES('{$mob}','{$txt}','{$tx}')";
                if (mysqli_query($conn,$sql)) {
                    // code...
                
                    echo 1;
                
                }
                else{
                    echo 0;
                }	
            }

?>