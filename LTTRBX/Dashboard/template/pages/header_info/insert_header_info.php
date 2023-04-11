<?php

    include "../../../../Auth/config.php";

    $mob = $_POST['number']; 
    $txt = $_POST['text'];

         if(!empty($mob) && !empty($txt)){
            $sql = "INSERT INTO header_info (phone,header_text) VALUES('{$mob}','{$txt}')";
                if (mysqli_query($conn,$sql)) {
                    // code...
                
                    echo 1;
                
                }
                else{
                    echo 0;
                }	
            }

?>