<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "rushit";

  $conn = new mysqli($servername ,$username , $password , $dbname);

  if ($conn->connect_error) {
    die("Record Insert Succesfull" . $conn->connect_error);
  }
  
  $sql = "INSERT INTO myguests (id , firstname , lastname , email)
   VALUES (1,'rushit','mangukiya','rushitmangukiya00@gmail.com');";
  $sql .= "INSERT INTO myguests (id , firstname , lastname , email)
   VALUES (2,'rudra','nathani','rudra123@gmail.com');";
  $sql .= "INSERT INTO myguests (id , firstname , lastname , email)
   VALUES (3,'goplo','bharvad','goplo123@gmail.com');";
  $sql .= "INSERT INTO myguests (id , firstname , lastname , email)
   VALUES (4,'mohit','rajput','mohit123@gmail.com');";
  $sql .= "INSERT INTO myguests (id , firstname , lastname , email)
   VALUES (5,'pars','vekariya','pars123@gmail.com');";

  if ($conn->multi_query($sql) === TRUE) {
    echo"New Record Insert Successfull.:";
  }else {
    echo"Error" . $sql . "<br>" . $conn->error;
  }

  $conn->close();

?>