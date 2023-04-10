<?php

 include "config.php";

 if (isset($_POST['submit'])) {
        
 // $id = $_POST['id'];   
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];  
 $email =$_POST['email']; 
 $mobile =$_POST['mobile'];
 $gender =$_POST['gender'];
 $password =$_POST['password'];
 $cpassword =$_POST['cpassword'];

 if($password !== $cpassword){
  $error[password] ="confirm password not match";
 }

 if (!empty($fname)&&($lname)&&($email)&&($mobile)&&($gender)&&($password)&&($cpassword)) {

   $sql ="INSERT INTO `register`(`firstname`, `lastname`, `email`, `phone`, `gender`, `password`) VALUES ('{$fname}','{$lname}','{$email}','{$mobile}','{$gender}','{$password}')";

   $result=Mysqli_query($conn,$sql) or die("query unsuccesful");

    header("Location:http://localhost/project/LTTRBX/Auth/registration.php");
}else{
   header("Location:http://localhost/project/LTTRBX/Auth/registration.php");

}
}

?>