<?php

        class formfil{
            public $srno ,$name, $age, $filde;

            public function __construct($a ,$b,$c,$d) {
                $this->srno = $a;
                $this->name = $b;
                $this->age = $c;
                $this->filde = $d;
            }
            
            function show(){
                echo "that is srno : {$this->srno} that student name is : {$this->name} and age : {$this->age} that is filde of institution : {$this->filde}";
                echo"<br>";
            }
        }

        $obj = new formfil(1,"rushit",19,"php");
        $obj1 = new formfil(2,"prince",19,"galaxi");
        $obj2 = new formfil(3,"rushit",16,"11 study");

        $obj->show();
        $obj1->show();
        $obj2->show();
        ?>