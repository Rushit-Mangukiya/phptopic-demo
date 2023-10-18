<?php

    $servername = "localhost";
    $username= "root";
    $password ="";
    $dbname = "rushit";

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username ,$password);

        $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

        $sql = "DELETE FROM myguests WHERE firstname = 'rushit'";
        $conn->exec($sql);

        echo"Record Delete Successfull";
    }
    catch(PDOException $e){
        echo $sql ."<br>". $e->getMessage();
    }

    $conn = null;


?>