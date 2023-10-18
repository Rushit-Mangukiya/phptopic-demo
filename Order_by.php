<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table ,th ,td{
            border : 1px solid black;
            width: 500px;
            margin : auto;
            text-align: center;
        }
    </style>
</head>
<body>
    
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname ="rushit";

    $conn = new mysqli($servername , $username ,$password , $dbname);

    if (!$conn) {
        die("connection failed" . $conn->connecte_error);
    }

    $sql = "SELECT id , firstname , lastname FROM MyGuests ORDER BY firstname DESC";

    $result = mysqli_query($conn , $sql);
    

    if (mysqli_num_rows($result) > 0) {
        echo"<table><tr><th> ID </th><th> Name </th><th>SarName</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo"<tr><td>" . $row["id"] . "</td><td>" . $row["firstname"] . " </td><td>" . $row["lastname"] . "</td></th>";
         }
    }else{
        echo"0 result";
    }

    $conn->close();
    

?>
</body>
</html>