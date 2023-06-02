<?php
    include "../cud/db_conn.php";
    $id = $_GET['ID'];
    mysqli_query($conn, "DELETE FROM `membrii` WHERE id = $id");
    header("location: echipa.php")
?>