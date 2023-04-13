<?php
        $menuid = $_POST['id'];
            include "../../../../Auth/config.php";
        $sql = "SELECT * FROM header_menu where id = {$menuid}";
        $result = mysqli_query($conn, $sql) or die("SQL Query Failed");
        $output = "";
                if (mysqli_num_rows($result) > 0) {
                    // code...
                    // $output = '';
                                while ($row = mysqli_fetch_assoc($result)) {
                                    // code...
                                    $output .="<tr>
                                    <td>User Name</td>
                                    <td><input type='text' id='edit-menu' value='{$row['menu']}'></td>
                                    <td><input type='text' id='edit-id' hidden value='{$row['id']}'></td>
                                </tr>
                                <tr>
                                    <td><button id='save'class='btn-primary mr-2'> Save</button> </td>
                                </tr>";
                                }
                            
                            
                            echo $output;
                }
                else{
                        echo "<h2> No Record Found.</h2>";
                }
?>