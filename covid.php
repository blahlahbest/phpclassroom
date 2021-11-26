<?php
  $json = file_get_contents('https://covid19.ddc.moph.go.th/api/Cases/today-cases-all');
  $data = json_decode($json);

  echo "<table border='1'>";
 <html>
  <head>
  </head>
  <body>
    <table border="1">
      <?php
      for($i=0;$i<10;$i++){
          echo "<tr>";
          echo "<td>txn_date1</td>";
          echo "<td>new_case</td>";
          echo "<td>total_case</td>";
          echo "<td>new_death</td>";
          echo "<td>total_death</td>";
          
          echo "</tr>";
  foreach ( $data[0] as $key => $val ){
    echo $key.":".$val."<br>";
  }

  echo "</table>";
?>
    </table>
  </body>
</html>
