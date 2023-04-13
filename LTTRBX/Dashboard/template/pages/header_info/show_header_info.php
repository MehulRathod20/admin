<?php
    include "../../../../Auth/config.php";
    
    $sql = "SELECT * FROM header_info";
    $result = mysqli_query($conn, $sql) or die("SQL Query Failed");
    $output = "";
            if (mysqli_num_rows($result) > 0) {
                // code...
                            while ($row = mysqli_fetch_assoc($result)) {
                                // code...
                                $output .="
                                <tr><td>{$row['id']}</td><td>{$row['phone']}</td><td>{$row['header_text']}</td>
                                <td>
                                <button class='edit-btn' data-id='{$row['id']}'><i class='mdi mdi-lead-pencil'></i></button>
                                 <button class='delete-btn' data-id='{$row['id']}'> <i class='mdi mdi-delete'></i></button></td></tr>";
                            }
                            
                        mysqli_close($conn);
                        echo $output;
            }
            else{
                    echo "<h2> No Record Found.</h2>";
            }
    

?>