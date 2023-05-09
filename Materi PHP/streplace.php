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
   $karakter = "belajar php menggunkan strlen()";
   echo "karakter sebelum diubah" .$karakter;
   echo "\n";
   echo "karakter setelah diubah" . str_replace($karakter, "strlen", "str_replace");

   ?>

</body>

</html>