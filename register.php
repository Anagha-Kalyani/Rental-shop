<?php
    $server="localhfost";
    $username="root";
    $password="";

    $con=mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection failed");
    }
    echo "success";
?>