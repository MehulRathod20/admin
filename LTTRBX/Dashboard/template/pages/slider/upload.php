<?php

  if(isset($_FILES['my_image'])){

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    //validation
    if($error === 0){

    }else{
      $em="error";

      $error =array('error' => 1, 'em' => $em);
    }


  }
?>