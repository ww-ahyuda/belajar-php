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
   //define
   define("fungsi", "ini adalah cetakan hasil dari fungsi const");
   echo fungsi;

   echo "<br>";
   //define const array
   define("arraykelas", ["kelas x", "kelas xi", "kelas xxi"]);
   echo "saya adalah " . arraykelas[0];

   echo "<br>";
   //define const function global
   define("name", "merupakan contoh global fungsi definisi");
   function fungsi()
   {
    echo name;
   }
   fungsi();

    ?>

</body>

</html>