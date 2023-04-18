<?php

include "../config.php";

if(isset($_FILES['pimg'])){
  $errors = array();

  $file_name =$_FILES['pimg']['name'];
  $file_size =$_FILES['pimg']['size'];
  $file_tmp =$_FILES['pimg']['tmp_name'];
  $file_type =$_FILES['pimg']['type'];
  $file_ext = strtolower(end(explode('.',$file_name)));
  $extensions = array("jpeg","jpg","png");

  if(in_array($file_ext,$extensions) === false){
    
    $errors[] = "this extesion file not allowed,please choose a JPG OR PNG file.";
  }
  if($file_size > 4194304){
    $errors[] = "file size must be 4mb lower.";
  }
  if(empty($errors) == true){
    move_uploaded_file($file_tmp,"../upload/".$file_name);
  }else{
    print_r($errors);
    die();
  }

}

// session_start();

$Pname = mysqli_real_escape_string($conn,$_POST['Pname']);

$Price = mysqli_real_escape_string($conn,$_POST['Price']);

$sPrice = mysqli_real_escape_string($conn,$_POST['sPrice']);

$Description = mysqli_real_escape_string($conn,$_POST['Description']);



$sql ="INSERT INTO `product`(`image`,`name`, `price`, `sprice`, `description`) VALUES ('{$file_name}','{$Pname}','{$Price}','{$sPrice}','{$Description}')"; 



if(mysqli_query($conn,$sql)){
   header("Location:http://localhost/project/LTTRBX/Dashboard/template/pages/product/product.php");
}else{
  echo "<div class='alert alert-danger'>query failed</div>";
}


?>