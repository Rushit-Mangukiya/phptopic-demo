<?php
    
    class hello{
      public static $name = "hello rushit mangukiya";
      public static $age = "your age is : 20";

      public static function intro(){
        echo self::$name;
        echo"<br>";
        echo self::$age;
      }
    }

    echo hello::$name;
    echo"<br>";
    echo hello::$age;
    echo"<br>";
    hello::intro();
    echo"<br>";
    hello::intro();
    



?>