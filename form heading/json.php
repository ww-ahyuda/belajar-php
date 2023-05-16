<body>    
   <?php
   // json encode
   $kelas = array(
    // 'key' => 'value',
    'x' => 'kelas x',
    'xi' => 'kelas xi',
    'xii' => 'kelas xii',
   );
   echo json_encode($kelas['x']);


   foreach($kelas as $key) {
    echo $key . "<br>";
   }

   echo "<br>";

   $kelasDecode = '{"x" : 1, "xi" : 2, "xii" : 3}';
   var_dump(json_decode($kelasDecode));
   var_dump(json_decode($kelasDecode));


   ?>
</body>



