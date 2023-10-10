<?php

        class fruit{
            public $name;
            public $color;
            public $weight;

            function __construct($a,$b,$c){
                $this->name = $a;
                $this->color = $b;
                $this->weight = $c;
            }
            function show(){
                echo"fruit name : {$this->name} , fruit color : {$this->color} and weight : {$this->weight}";
            }

        }

        $mango = new fruit("apple","red",10);

        $mango->show();
       


?>