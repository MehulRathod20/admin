<?php


include "../config.php";


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

$name = mysqli_real_escape_string($conn,$_POST['Pname']);
$price = mysqli_real_escape_string($conn,$_POST['Price']);
$sprice = mysqli_real_escape_string($conn,$_POST['sPrice']);
$description = mysqli_real_escape_string($conn,$_POST['Description']);

 $sql ="UPDATE `product` SET `image`='{$file_name}',`name`='{$name}',`price`='{$price}',`sprice`='{$sprice}',`description`='{$description}' WHERE  id = {$_POST["id"]}";
 
 $result=mysqli_query($conn,$sql);
 if($result){
   header("Location:http://localhost/project/LTTRBX/Dashboard/template/pages/product/product.php");
 }else{
  echo "query failed";
 }

?>