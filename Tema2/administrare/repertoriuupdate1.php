<?php
    include "../cud/db_conn.php";
    $List = $_POST['LIST'];
    $ID = $_POST['ID'];
    $query = "UPDATE `repertoriu` SET `LIST`='$List' WHERE ID = $ID";
    mysqli_query($conn, $query);
    header("location: repertoriu.php");
?>
