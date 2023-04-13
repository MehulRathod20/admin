<?php
        $menuid = $_POST['id'];
            include "../config.php";
        $sql = "SELECT * FROM header_menu where id = {$menuid}";
        $result = mysqli_query($conn, $sql) or die("SQL Query Failed");
        $output = "";
                if (mysqli_num_rows($result) > 0) {
                    // code...
                    // $output = '';
                                while ($row = mysqli_fetch_assoc($result)) {
                                    // code...
                                    $output .="
                                    <div class='form-group'>
                                        <label for='edit-Menu'>Edit Menu</label>
                                        <input type='text' class='form-control' id='edit-menu' value='{$row['menu']}' placeholder='Edit Menu'>
                                        <input type='text' id='edit-id' hidden value='{$row['id']}'>
                                    </div>
                                        <button type='submit' id='save' class='btn btn-primary mr-2'>Update</button>";
                                }
                            
                            
                            echo $output;
                }
                else{
                        echo "<h2> No Record Found.</h2>";
                }
?>