<?php
 $rows=20;
 echo"Rhombus";echo"<br>";
 for($i=0;$i<$rows;$i++){
     for($j=0;$j<$rows-$i;$j++){
        echo("&nbsp;&nbsp;");
     }
     for($k=0;$k<2*$i-1;$k++){
        print("*");
     }
     echo"<br>";
 }

 for($i=$rows-1;$i>=0;$i--){
     if($i==19){
         continue;
     }
     for($j=0;$j<$rows-$i;$j++){
        echo("&nbsp;&nbsp;");
     }
     for($y=0;$y<2*$i-1;$y++){
       echo("*");
     }
     echo"<br>";


 }













?>