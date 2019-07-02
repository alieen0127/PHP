<?php
?>
<table border='1' width='100%'>
    <tr>
    
        <?php
        define("ROWS", 4);
        define("FROM", 1);
        define("TO", 3);
      for ($k = 0 ; $k <ROWS ; $k++){
         echo '<tr>';
        
        for ( $j =FROM ; $j <= TO ; $j++){
            
         $newj = $j + (TO-FROM+1) * $k;
       /*  if ($newj % 2 ==0)
         {
             echo '<td bgcolor="yellow">';
          } else
          {   
               echo '<td bgcolor="pink">';
        }*/
        $color= ($newj % 2 ==0)?'pink':'yellow';
        echo  $color;
        echo "<td bgcolor=$color>";
        
        for ($i = 1 ; $i < 10 ; $i++ ){

             $r= $newj * $i ; 
             echo "{$newj} x {$i} = {$r}<br>";  
         }
         echo '</td>';
        }
        echo '</tr>';
    }
       

          ?>
   
    </table>
        