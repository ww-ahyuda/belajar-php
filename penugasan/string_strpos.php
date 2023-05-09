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
   $strpos = "Saat ini saya sudah mencapai materi php.";
   $searchstrpos = "php";
   $tidakberhasil = "javascript";
   // No 1
   echo "1.A. behasil :" . strpos($strpos, $searchstrpos);
   echo "\n";
   echo "B. tidak berhasil :" . strpos($strpos, $searchstrpos);
   // No 2
   echo "1.A. behasil :" . strpos("Saat ini saya sudah mencapai materi php.", "php");
   echo "\n";
   echo "B. tidak berhasil :" . strpos("Saat ini saya sudah mencapai materi php.", "javascript")
   ?>


</body>

</html>