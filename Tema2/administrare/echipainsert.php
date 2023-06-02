<?php
    include "../cud/db_conn.php";
    echo $LIST = $_POST['list'];
    $query = "INSERT INTO `membrii`(`list`) VALUES ('$LIST')";
    mysqli_query($conn, $query );
    header("Location: echipa.php");
?>