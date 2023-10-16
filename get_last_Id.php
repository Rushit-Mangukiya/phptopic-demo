<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "rushit";

  $conn = new mysqli($servername ,$username , $password , $dbname);

  if ($conn->connect_error) {
    die("Record Insert Succesfull" . $conn->connect_error);
  }

  $sql = "INSERT INTO myguests VALUES (8,'rudra','nathani','rudra123@gmail.com')";
  $sql = "INSERT INTO myguests VALUES (9,'goplo','bharvad','goplo123@gmail.com')";
  $sql = "INSERT INTO myguests VALUES (10,'mohit','rajput','mohit123@gmail.com')";
  $sql = "INSERT INTO myguests VALUES (11,'pars','vekariya','pars123@gmail.com')";

  if ($conn->multi_query($sql) === TRUE) {
    echo"New Record Insert Successfull.:";
  }else {
    echo"Error" . $sql . "<br>" . $conn->error;
  }

  $conn->close();

?>