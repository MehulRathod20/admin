<?php
    include "../config.php";
    
    $sql = "SELECT * FROM header_menu";
    $result = mysqli_query($conn, $sql) or die("SQL Query Failed");
    $output = "";
            if (mysqli_num_rows($result) > 0) {
                // code...
                            while ($row = mysqli_fetch_assoc($result)) {
                                // code...
                                $output .="
                                <tr><td>{$row['id']}</td><td>{$row['menu']}</td><td> <img src='../upload/$row[image]'  width = '200px'  height = '70px'></td>
                                <td>
                                <a class='edit-btn text-success fs-5 me-2' data-id='{$row['id']}'><i class='fa fa-pen-to-square'></i></a>
                                 <a class='delete-btn text-danger fs-5' data-id='{$row['id']}'> <i class='mdi mdi-delete'></i></a></td></tr>";
                            }
                            
                        mysqli_close($conn);
                        echo $output;
            }
            else{
                    echo "<h2> No Record Found.</h2>";
            }
    

?>