<?php
  $json = file_get_contents('https://covid19.ddc.moph.go.th/api/Cases/today-cases-all');
  $data = json_decode($json);

  echo "<table border='1'>";
 <?php
      for($i=0;$i<100;$i++){
          echo "<tr>";
          echo "<td>คอลัมน์1</td>";
          echo "<td>คอลัมน์2</td>";
          
          echo "</tr>";
        }
  foreach ( $data[0] as $key => $val ){
    echo $key.":".$val."<br>";
  }

  echo "</table>";
?>
