<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP project</title>
</head>

<body>
    
 <?php
 $kalimatstirng = "saat ini sudah belajar laravel";
 $cari = "/sudah/";
 $gantikan = "belum";

 echo preg_replace($cari, $gantikan, $kalimatstirng);

 //ini contoh penggunaan 1
 //echo preg_replace("/sudah/", "belum", "karakter spogsbob sudah selesai")
 
 //ini contoh penggunaan 2
 echo preg_replace("/sudah/", "belum", "karakter spogsbob sudah selesai");

 ?>

</body>

</html>