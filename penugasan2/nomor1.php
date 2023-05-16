<?php
  echo "<p>Kode Program PHP(15)</p>";
  echo "<pre>";
 
  $tinggi_segitiga = 15;
  for($i = 1; $i <= $tinggi_segitiga; $i++) {
    for($j = 1; $j <= $i; $j++) {
      echo " #";
    }
    echo "<br>";
  }
 
  echo "</pre>";
?>