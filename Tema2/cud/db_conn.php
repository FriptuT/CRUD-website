<?php

    $sname = "localhost";
    $uname = "root";
    $password = "";

    $db_name = "db_teatru";

    $conn = mysqli_connect($sname,$uname,$password,$db_name);

    if (!$conn) {
        echo "Connection failed!";
    }

    // mysqli_select_db($conn, $db_name) or die ("Eroare la selectarea bazei de date ".mysqli_error($conn));

?>