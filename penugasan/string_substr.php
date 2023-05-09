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
   // no 1
   $karakter = "Saat ini saya sudah mencapai materi php.";
   echo "karakter yang diambil : " . substr($karakter, 0, 10);
    ?>
    <?php
    // no 2
   $karakter = "Aku telah melalui tahapan belajar php string, sekarang telah mencapai tahapan substr. ";
   echo "karakter yang diambil : " . substr($karakter, 3, 20);
    ?>
</body>

</html>