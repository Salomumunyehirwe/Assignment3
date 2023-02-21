<?php
$rows=20;
echo"Equilateraltriangle";echo"<br>";
for($i=0;$i<$rows;$i++){
    for($j=0;$j<$rows-$i;$j++){
       echo("&nbsp;&nbsp;");
    }
    for($k=0;$k<2*$i-1;$k++){
       print("*");
    }
    echo"<br>";
    
}
?>