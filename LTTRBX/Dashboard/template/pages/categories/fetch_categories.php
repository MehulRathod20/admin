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
                                 <option>{$row['menu']}</option>";
                            }
                            
                        mysqli_close($conn);
                        echo $output;
            }
            else{
                    echo "<h2> No Record Found.</h2>";
            }
    

?>