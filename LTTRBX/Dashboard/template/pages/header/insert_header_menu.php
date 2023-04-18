<?php 

    include "../config.php";
     $addmenu = $_POST['menu']; 
    if(isset($_FILES['img'])){
        $errors = array();
      
        $file_name =$_FILES['img']['name'];
        $file_size =$_FILES['img']['size'];
        $file_tmp =$_FILES['img']['tmp_name'];
        $file_type =$_FILES['img']['type'];
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
    //   $addmenu = mysqli_real_escape_string($conn,$_POST['menu']);
         if(!empty($addmenu)){
            $sql = "INSERT INTO header_menu (menu,image) VALUES('{$addmenu}','{$file_name}')";
                if (mysqli_query($conn,$sql)) {
                    // code...
                
                    echo 1;
                
                }
                else{
                    echo 0;
                }	
            }
?>