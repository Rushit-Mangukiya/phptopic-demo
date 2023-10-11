<?php

 abstract class parentclass{

    public $name;

    abstract protected function clac() : string;
 }

 class chaildclass extends parentclass{

    public function calc() : string {
        echo "that is name {$this->name}";
    }
 }

 $test = new chaildclass("audi");
 $test->calc();




?>