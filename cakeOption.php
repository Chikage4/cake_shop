<?php 

    $spring = 3000;
    $summer = 3000;
    $bday = 2500;
    $green = 4000;

   if (isset($_POST["cakeOption"])&& isset($_POST["number"])) {
     $result = setValue($_POST["cakeOption"],$_POST["number"]);

   }else{

    }
    function setValue($cake,$number){
      $total = 0.0;
      if($cake == "spring"){
        $total = 3000 * $number;
      }elseif($cake == "summer"){
        $total = 3000 * $number;
      }elseif($cake == "bday"){
        $total = 2500 * $number;
      }else{
        $total = 4000 * $number;
      }
      return $total;
     
      $result = setValue($cake,$number); 


      echo "<h2 class='display-4 text-center mt-5'>Total : $result</h2>";
    }    
    




   




?>
