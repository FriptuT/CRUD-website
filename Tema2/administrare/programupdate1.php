<?php
    include "../cud/db_conn.php";
    $List = $_POST['List'];
    $ID = $_POST['Id'];
    $query = "UPDATE `program` SET `List`='$List' WHERE Id = $ID";
    mysqli_query($conn, $query);
    header("location: program.php");
?>
