<?php
       
       class employee{
              public $name;
              public $age;
              public $salary;


              public function __construct($n ,$a ,$s){
                     $this->name = $n;
                     $this->age = $a;
                     $this->salary = $s;
                     
              }
                    
          
              function show(){
                     echo"My Name is : {$this->name} <br>";
                     echo"My age is : {$this->age} <br>";
                     echo"My salary is : {$this->salary} <br>";
              }
       }
       class manager extends employee{

              public $tr = 1000;
              public $phone = 300;
              public $totalsalary;
              function show(){
                     $this->totalsalary =$this->salary + $this->tr + $this->phone;

                     echo"My Name is : {$this->name} <br>";
                     echo"My age is : {$this->age} <br>";
                     echo"My salary is : {$this->totalsalary} <br>";
              }
       }

       $obj = new manager("rushit", "20", "20000");
       $obj1 = new employee("prince", "20", "1000");

       $obj->show();
       $obj1->show();

?>