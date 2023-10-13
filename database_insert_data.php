<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "rushit";

    $conn = new mysqli($servername , $username , $password , $database);

    if ($conn->connect_error) {
        die("Connection Failed :" . $conn->connect_error);
    }

    $sql = "INSERT INTO MyGuests (firstname , lastname , email) VALUES ('prince' , 'kikani' , 'kikaniPrince@gmail.com')";

    $result = mysqli_query($conn , $sql);

    if ($result) {
        echo "New Record Insert Successfull";
    }else {
        echo "Not record inserted" . $conn->error;
    }


?>