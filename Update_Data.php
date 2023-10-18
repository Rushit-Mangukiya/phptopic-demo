<?php

    $servername = "localhost";
    $username = "root";
    $password ="";
    $dbname = "rushit";

    $conn = new mysqli($servername ,$username ,$password ,$dbname);

    if (!$conn) {
        die("connection Failed" $conn->connect_error);
    }

    $sql = "UPDATE myguests SET lastname ='mangukiya' WHERE id=2";

?>