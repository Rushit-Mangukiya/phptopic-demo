<?php

    include "product.php";
    include "testing.php";

    $obj = new product\product();
    $obj->name = "mangukiya rushit";
    $obj->text();
    echo"<br>";
    $obj2 = new testing\product();
    $obj2->collegeName = "Bhagwan Mahavir Univercity";
    $obj2->text2();


?>