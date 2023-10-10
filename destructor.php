<?php

    class content{

        function __construct(){
            echo"my name is rushit mangukiya <br>";
        }

        function hellow(){
            echo"hellow rushit <br>";
        }

        function __destruct(){
            echo"secessful your opening account";
        }
    }

    $obj = new content();

    $obj->hellow();

?>