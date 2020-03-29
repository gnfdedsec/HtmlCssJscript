<?php
$existingNames = array("กรีน","เก่ง","กาก","บิวตี้");
if(isset($_POST['suggestion'])) {
$name =$_POST['suggestion'];

  if(!empty($name)){
    $i = 0;
     foreach ($existingNames as $element){
           if(strpos($element, $name) !== false) {
            $i++;
            echo "<span id='$i'>$element </span>";
            echo"<br>";
      
        }
          
     
        }
    }
 }



?>