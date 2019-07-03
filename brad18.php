<table border='1' width='100%'>
    
<?php

    for($i = 1; $i <= 100; $i++) {
        
      /*  if($i%10 ==0){
            echo '<tr>';
        }*/
        if($i  == 1) {
            echo "<td bgcolor=pink>";
            echo "{$i}";
            
           
            continue;
        }

        for($j = 2; $j < $i; ++$j) {
            
            
             if($i % $j == 0) {
                echo "<td bgcolor=pink>";
                echo "{$i}";
                
               
                break;
            }

            
        }
        if($j == $i) {
            echo "<td bgcolor=yellow>";
            echo $i . ' ';
            
            
        }
        if($i%10 ==0){
            echo '</tr>';
        }
        if($i%10 ==0 && $i!=100){
            echo '<tr>';
        }
       
   
    }

?>

</table>