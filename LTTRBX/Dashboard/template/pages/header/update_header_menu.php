<?php

include "../config.php";
$menuid = $_POST['id'];
$menu = $_POST['menu'];

if(empty($_FILES['new-image']['name'])){
    $file_name = $_POST['old-image'];
  }else{
    $errors = array();
  
    $file_name =$_FILES['new-image']['name'];
    $file_size =$_FILES['new-image']['size'];
    $file_tmp =$_FILES['new-image']['tmp_name'];
    $file_type =$_FILES['new-image']['type'];
    $file_ext = (end(explode('.',$file_name)));
    $extensions = array("jpeg","jpg","png");
  
    if(in_array($file_ext,$extensions) === false){
      
      $errors[] = "this extesion file not allowed,please choose a JPG OR PNG file.";
    }
    if($file_size > 2097152){
      $errors[] = "file size must be 2mb lower.";
    }
    if(empty($errors) == true){
      move_uploaded_file($file_tmp,"../upload/".$file_name);
    }else{
      print_r($errors);
      die();
    }
  
  }

$sql = "UPDATE header_menu SET menu = '{$menu}' , image= '{$file_name}' WHERE id = {$menuid}";
// $result = mysqli_query($conn,$sql) or die("SQL Query Failed");

if (mysqli_query($conn, $sql)) {
    echo 1;
} else {

    echo 0;
}
mysqli_close($conn);
