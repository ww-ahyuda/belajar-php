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
   //else
   $nilai = 74;
   if($nilai = 75) {
      echo "kamu dibawah kkm";
   } else{
      echo "kamu diatas kkm";
   }

   echo "<br>";

   $waktu =10;
   if ($waktu <=10){
    echo "selamat pagi";
   }else {
    echo "selamat siang";
   }

   echo "<br>";

   //elseif
   $nilaitugas = 80;
   if ($nilaitugas >=90) {
      echo "selamat, kamu nilainya bagus! (A)";
   } elseif ($nilaitugas >=85) {
      echo "selamat kamu nialinya bagus! (A-)";
   } elseif ($nilaitugas >=80) {
      echo "selamat kamu nialinya bagus! (B)";
   } elseif ($nilaitugas >= 75) {
    echo "selamat, kamu nilainya kurang bagus! (C)";
   } else {
      echo "selamat, kamu remedial";
   }


   echo "<br>";


   //switch
   $hari = "senin";
   switch ($hari) {
    case 'senin':
       echo "hari ini hari senin";
       break;
    case 'selasa';
       echo "hari ini hari selasa";
       break;
    case 'rabu';
       echo "hari ini hari rabu";
       break;
    case 'kamis';
       echo "hari ini hari kamis";
       break;
    case 'jumat';
       echo "hari ini hari jumat";
       break;  
    default:
        echo "Hari libur, Jangan ganggu!.";
        break;
   }


    ?>

</body>

</html>