<?php
      class domain{
        protected static function getwebsiteName(){
            return "W3school.com";
        }
      }

      class domainW3 extends domain{
        public $websiteName;
        public function __construct(){
            $this -> websiteName = parent::getwebsiteName();
                

        }   
      }

      $domainW3 = new domainW3;




      
      echo $domainW3 -> websiteName;

?>