<?php
    include "../cud/db_conn.php";
    $List = $_POST['list'];
    $ID = $_POST['id'];
    $query = "UPDATE `membrii` SET `list`='$List' WHERE id = $ID";
    mysqli_query($conn, $query);
    header("location: echipa.php");
?>
