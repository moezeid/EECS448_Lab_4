<?php

function multiply($x, $y){

  $z = $x * $y;
  return $z;
}
echo "<html>

  <head></head>
  <h1>PHP Generated Multiplication Table<br></h1>

  ";





echo " <style>
table, tr, td {
  border: 1px solid black;
  padding: 15px;
  font-family: serif;

}
</style>";

echo "<table>";


echo "<tr>";

for($k=1; $k<=101; $k++){

  if($k == 1){
    //echo "<td> </td>";
    echo "<td> </td>";
  }
  else{


      echo "<td>" . ( $k - 1) . "</td>";
      //echo "<td> </td>";

  }
}
echo "</tr>";

for($i=1; $i<=100; $i++){
  echo "<tr>";





  echo "<td>$i</td>";
  for($j=1;$j<=100;$j++){


    echo "<td>" . multiply($i,$j) . "</td>";
  }

  echo "</tr>";
}





echo "</table>";

echo "</html>";
?>
