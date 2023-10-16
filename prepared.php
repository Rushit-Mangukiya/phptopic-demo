<?php

    $servername ="localhost";
    $username = "root";
    $password = "";
    $dbname = "rushit";

    $conn = new mysqli($servername, $username , $password , $dbname);

    if (!$conn) {
        die("connection failed" . $conn->connection_error());
    }

    $stmt = $conn->prepare("INSERT INTO Myguests (srno,firstname,lastname,email) VALUES (?,?,?,?)");
    $stmt->bind_param("sss", $srno ,$firstname , $lastname , $email);

    $srno = 0;
    $firstname = "rushit";
    $lastname = "mangukiya";
    $email = "rushitmangukiya00@gmail.com";
    $stmt->execute();

    $srno = 0;
    $firstname = "smit";
    $lastname = "kevadiya";
    $email = "smit123@gmail.com";
    $stmt->execute();

    $srno = 0;
    $firstname = "prince";
    $lastname = "kikani";
    $email = "princekikani113@gmail.com";
    $stmt->execute();

    echo"new record successfull";

    $stmt->close();
    $conn->close();

?>