<?php   

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rushit";

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username , $password);

        $conn ->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO myguests VALUES (6,'Nirmeet','Nabhoya','Nirmeet1234@gmail.com')";

        $conn->exec($sql);
        echo"New Recorde Insert Successfull";
    }catch(PDOException $e){
        echo $sql ."<br>". $e->getMessage();
    }

    $conn=null;
?>