<?php
     namespace table;
     class table{
        public $title = "";
        public $numrow = 0;
        public function message(){
            echo"<p> table '{$this->title}' has {$this->numrow} row.";
        }
     }

     $table = new table();
     $table->title = "my table";
     $table->numrow = 4;
?>

<!DOCTYPE html>
<html lang="en">
<body>
   <?php
   $table->message();
   
   ?> 
</body>
</html>