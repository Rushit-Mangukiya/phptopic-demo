<?php
    
    class hello{
      public static $name = "my name is rushit mangukiya";
      public static $age = "My Age is : 20";

      public static function intro(){
        echo self::$name;
        echo"<br>";
        echo self::$age;
      }
        public function __construct($n ,$x){
          self::$name = $n;
          self::$age = $x;
        }
    }
      

    // echo hello::$name;
    // echo"<br>";
    // echo hello::$age;
    // echo"<br>";
    // hello::intro();
    // echo"<br>";
    // hello::intro();
    
    $obj = new hello("hello rushit",20);
    //   echo"<br>";
   echo $obj->intro();



?>