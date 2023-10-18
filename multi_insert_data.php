<?php

    $servername = "localhost";
    $username= "root";
    $password ="";
    $dbname = "rushit";

    $conn = new mysqli($servername, $username , $password, $dbname);

    if (!$conn) {
        die("Connection Failed" . $conn->connect_error);
    }

    $sql = "INSERT INTO myguests (id, firstname, lastname, email) VALUES (1,'Rushit','Mangukiya','Rushit123@gmail.com'),
     (2,'prince','kikani','Prince123@gmail.com'),
     (3,'Kuldeep','Mangukiya','Kuldeep123@gmail.com'),
     (4,'Heet','Kikani','Heet123@gmail.com'),
     (5,'Nirmeet','Nabhoya','Nirmeet123@gmail.com')
     ";
    
 
    $result = mysqli_multi_query($conn , $sql);

    if ($result) {
        echo"Record insert Successfull";
    }else {
        echo"Not insert Records" . $conn->error;
    }

    $conn->close(); 

?>