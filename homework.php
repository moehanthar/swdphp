<?php

    function fact(){
        $num = 9;
        $num2 =1 ;
        $i =1;
        echo "$num!=";
        while($num>=1){
          $num2 *=$i;
          echo "$num , ";
           $num--;
          
          // echo "<br>";
          $i++;
           
            
            
         }

        
      
         echo "=$num2";
    }

    fact();

?>