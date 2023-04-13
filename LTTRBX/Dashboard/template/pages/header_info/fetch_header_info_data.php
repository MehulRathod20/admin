<?php
$id = $_POST['id'];
include "../../../../Auth/config.php";
$sql = "SELECT * FROM header_info where id = {$id}";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed");
$output = "";
if (mysqli_num_rows($result) > 0) {
    // code...
    // $output = '';
    while ($row = mysqli_fetch_assoc($result)) {
        // code...
        $output .= "<div class='form-group'>
                                    <label for='mobile'>Update Mobile Number</label>
                                    <input type='number' class='form-control' id='edit-hphone' value ='{$row['phone']}'>
                                    <input type='text' id='edit-id' hidden value = '{$row['id']}'>

                                  </div>
                                <div class='form-group'>
                                    <label for='header-text'>Update Header Text</label>
                                    <input type='text' class='form-control' id='edit-htxt' value ='{$row['header_text']}'>
                                </div>
                                    <button type='submit' id='save' class='btn btn-primary'>Update</button>";
    }


    echo $output;
} else {
    echo "<h2> No Record Found.</h2>";
}
