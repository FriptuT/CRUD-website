<?php
    include "../cud/db_conn.php";
    echo $LIST = $_POST['List'];
    $query = "INSERT INTO `program`(`List`) VALUES ('$LIST')";
    mysqli_query($conn, $query );
    header("Location: program.php");
?>