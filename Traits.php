<?php

    trait hello{
        public function text(){
            echo"Hello Mangukiya Rushit <br>";
        }
    }
    trait hello1{
        public function text1(){
            echo"Hello Mangukiya kuldeep <br>";
        }
    }
    trait hello2{
        public function text2(){
            echo"Hello Mangukiya kashyap <br>";
        } 
    }
    trait hello3{
        public function saybyy(){
            echo"by by Mangukiya kashyap ";
        }
    }

    class sayhello{
        use hello , hello1 , hello2, hello3;
    }

    $obj = new sayhello();
    $obj->text();
    $obj->text1();
    $obj->text2();
    $obj->saybyy();
    
?>