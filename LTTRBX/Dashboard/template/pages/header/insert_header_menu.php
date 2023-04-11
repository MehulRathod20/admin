<?php 

    include "../../../../Auth/config.php";

    $sql = "INSERT INTO header_menu";
    $addmenu = $_POST['menu']; 

         if(!empty($addmenu)){
            $sql = "INSERT INTO header_menu (menu) VALUES('{$addmenu}')";
                if (mysqli_query($conn,$sql)) {
                    // code...
                
                    echo 1;
                
                }
                else{
                    echo 0;
                }	
            }
?>