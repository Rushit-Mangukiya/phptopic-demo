<?php

   class pi{
      public static $value = 3.14159;
      
   }
         class x extends pi{
            public function staticvalue(){
               return parent::$value;
            }
         }



         echo  x::$value;

   $pi = new x();
   echo $pi->staticvalue();

?>