<?php
$n = 100;
$isPrime = true;
for ($i = 2; $i < $n; $i++){
    if ($n % $i ==0){
        $isPrime = false;
        break;
        $color= ($n % $i ==0)?'pink':'yellow';
        echo  $color;
        echo "<td bgcolor=$color>";
        echo '</td>';
    }
}

echo $isPrime?"OK":"XX";
/*
?>
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
            
         $newj = $j + (TO-FROM+1) * $k;



     
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





    <table border='1' width='100%'>
    <?php
        echo '<tr>';
        for($i = 1; $i <= 100; $i++) {
    
            for($j = 2; $j < $i; ++$j) {
                
                if($i % $j == 0) {
    
                    //echo "A{$i}";
                    //echo '</tr>';
                    //echo '<td>';
                    break;
                }
    
                
            }   
            if($j == $i) {
                echo '<td>';
                echo $i . ' ';
                echo '</td>';
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














        