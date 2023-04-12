<?php

include "../config.php";

$sql="SELECT * FROM slider";

$result=mysqli_query($conn,$sql);

$output ="";

if(mysqli_num_rows($result) > 0){
   
  while($row=mysqli_fetch_assoc($result)){

    $output.="
 
    <tr>
      <th>{$row['id']}</th>
      <td>{$row['image']}</td>
      <td>
        <a href='#' class='text-success fs-5'><i class='fa-solid fa-pen-to-square'></i></a>
         <button  class='btn btn-primary delete' ms-2 fs-5'><i class='fa fa-trash'></i></button>
      </td>
    </tr>
  ";
}
mysqli_close($conn);
echo $output;
}
?>