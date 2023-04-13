<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbase = "dma";
    $conn = mysqli_connect($servername,$username,$password,$dbase);

    if(! $conn){
        die("Error" . mysqli_connect_error());
    }
?>