<?php
?>
<table border='1' width='100%'>
    <tr>
    
        <?php
        define("ROWS",10);
        define("FROM", 1);
        define("TO", 10);
      for ($k = 0 ; $k <ROWS ; $k++){
         echo '<tr>';
         echo "{$k}";
        for ( $j =FROM ; $j <= TO ; $j++){
            
         //$newj = $j + (TO-FROM+1) * $k;



     
        $color= ($newj % 2 ==0)?'pink':'yellow';
        echo  $color;
        echo "<td bgcolor=$color>";
        
       
         echo "{$newj} "; 
         echo '</td>';
        }
        echo '</tr>';
    }
       

          ?>
   
    </table>*/
        