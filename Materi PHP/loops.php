<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    
   <?php
   //perulangan:
   for($awal = 1; $awal <=10; $awal++) {
    echo "nilai: " . $awal . "<br>";
   }

   //forif
   for ($awal = 1;; $awal++) {
     if ($awal > 10) {
        break;
     }
     echo $awal . "<br>";
   }


   //while
   $whiles = 1;
   while ($whiles <=10) {
    echo $whiles++;
   }

   echo "<br>";

   //do while
   $i = 1;
   do {
    echo $i . "";
    $i++;
   } while ($i <= 10);

   echo "<br>";

   //forech
   $arrayteman = array("kelas X", "kelas Xi", "kelas Xii", "kelas ga lulus " . "saya donatur sekolah");
   foreach($arrayteman as $array) {
    echo $array . "<br>";
   }

    ?>

</body>

</html>