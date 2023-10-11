<?php

    class fruit{
        public $name;
        public $color;
        public function __construct($name,$color){
            $this->name = $name;
            $this->color = $color;
            
        }
        public function intro(){
            echo"fruit name is : {$this->name} and the color is : {$this->color}";
        }

    }

    class Strawberry extends fruit{
        public function message(){
            echo"Am i fruit or a berry?";
        }
    }

    $Strawberry = new Strawberry("Strawberry","red");
    $Strawberry->message();
    $Strawberry->intro();


?>