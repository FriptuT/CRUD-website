<?php
    include "../cud/db_conn.php";
    $id = $_GET['ID'];
    mysqli_query($conn, "DELETE FROM `program` WHERE Id = $id");
    header("location: program.php");
?>