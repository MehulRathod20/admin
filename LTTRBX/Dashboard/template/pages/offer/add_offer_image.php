 

<?php

include "../config.php";

if(isset($_FILES['offer_img'])){
  $errors = array();
 
  $file_name =$_FILES['offer_img']['name'];
  $file_size =$_FILES['offer_img']['size'];
  $file_tmp =$_FILES['offer_img']['tmp_name'];
  $file_type =$_FILES['offer_img']['type'];
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
$sql ="INSERT INTO offer(image)VALUES('{$file_name}')"; 



if(mysqli_query($conn,$sql)){
    header("Location:http://localhost/project/LTTRBX/Dashboard/template/pages/offer/offer.php");
}else{
  echo "<div class='alert alert-danger'>query failed</div>";
}
?>