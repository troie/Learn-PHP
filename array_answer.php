<?php
  $counter = count($service);
  for($i=0;$i< $counter;$i++){
    echo "<tr><td>".$service[$i][0]."</td><td>".$service[$i][1]."</td><td>".$service[$i][2]."</td><td>".$service[$i][3]."</td><td>".$service[$i][4]."</td></tr>";
  }
?>