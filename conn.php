<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "wslutfi";

    $conn = mysqli_connect($servername, $username, $password, $databasename);
    if(!$conn){
        die("tidak konek");
    }
?>