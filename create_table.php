<?php
    
// was creat for connection

$servername = "localhost";
$username = "root";
$password = "";
$database = "rushit";

// connection for database


$conn = mysqli_connect($servername , $username , $password , $database);


    if (!$conn) {
        die("connection failed database" . mysqli_connect_error());
    }else{
        echo"connection was successful <br>";
        
    }

        // creat table in the db
        $sql = "CREATE TABLE `inputtable` (
         `Sno` INT NOT NULL AUTO_INCREMENT ,
         `Name` VARCHAR(20) NOT NULL , 
         `Role` VARCHAR(50) NOT NULL , 
         `DOJ` DATE NOT NULL , 
         PRIMARY KEY (`Sno`))";

         $result = mysqli_query($conn , $sql);

            if ($result) {
                echo"table creat successful <br>";
            }else {
                echo"the table not created successful because of this error" . mysqli_error($conn);
            }

            $conn->close();


?>
