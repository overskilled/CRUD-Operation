<?php

include_once "connect.php";
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql_query = "DELETE FROM crud where id = $id;";
    $result    = mysqli_query($connect, $sql_query);
    if ($result) {
        header("location: display.php");
        
    }else {
        die(mysqli_error($connect));
    }
}
