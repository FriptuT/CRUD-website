<?php
    include "../cud/db_conn.php";
    $id = $_GET['ID'];
    mysqli_query($conn, "DELETE FROM `repertoriu` WHERE ID = $id");
    header("location: repertoriu.php");
?>