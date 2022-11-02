<?php
 $serverName = "localhost";
 $userName = "root";
//enter your localhost password
 $password = "";
 $dbName = "busscheduledb";

 $conn = mysqli_connect($serverName, $userName, $password, $dbName);
 if (!$conn)
 {
        die("Connection failed:". mysqli_connect_error());
 }
?>
