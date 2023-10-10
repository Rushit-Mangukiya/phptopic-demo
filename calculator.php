<?php
        class calculater{
            public $a ,$b ,$c;

            function sum(){
                $this->c = $this->a + $this->b;
                return $this->c;
            }
            function sub(){
                $this->c = $this->a - $this->b;
                return $this->c;

            }
        }

        $c1 = new calculater();

        $c1-> a = 10;
        $c1-> b = 100;

        $c2 = new calculater();

        $c2 -> a = 100;
        $c2 -> b = 50;

        echo $c1-> sum();
        echo"<br>";
        echo $c2-> sub();
        


?>