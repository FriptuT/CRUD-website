<?php
    include "../cud/db_conn.php";
    echo $LIST = $_POST['LIST'];
    $query = "INSERT INTO `repertoriu`(`LIST`) VALUES ('$LIST')";
    mysqli_query($conn, $query );
    header("Location: repertoriu.php");
?>