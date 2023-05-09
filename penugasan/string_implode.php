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
 $arraytampung =array("bintang", "arya", "arif", "syahru");
 $implode = implode("/", $arraytampung);
 echo $implode;

 ?>
  <?php
 $arraytampung =array("html", "css", "javascript", "php");
 $implode = implode("-", $arraytampung);
 echo $implode;

 ?>

</body>

</html>