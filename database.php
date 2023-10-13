<?php

    
// was creat for connection

$servername = "localhost";
$username = "root";
$password = "";

// connection for database


$conn = mysqli_connect($servername , $username , $password);


    if (!$conn) {
        die("connection failed database" . mysqli_connect_error());
    }else{
        echo"connection was successful <br>";
        
    }

        $sql = "CREATE DATABASE RUSHIT12345";
        $result = mysqli_query($conn , $sql);
        echo"the result is ";
        echo var_dump($result);
        echo"<br>";

        if ($result) {
            echo"connection was successful <br>";
        }else{
            echo"connection was not successful". mysqli_error($conn);
        }

?>
