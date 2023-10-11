<?php

    interface animal{
        function makesound();
    }

    class name implements animal{
        public function makesound(){
            echo" Mangukiya Rushit <br>";
        }
    }
    class age implements animal{
        public function makesound(){
            echo" 20 <br>";
        }
    }
    class salary implements animal{
        public function makesound(){
            echo" 20000 <br>";
        }
    }

    $name = new name();
    $age = new age();
    $salary = new salary();
    $animals=array($name, $age ,$salary);

    foreach ($animals as $animal) {
        $animal->makesound();
    }




?>