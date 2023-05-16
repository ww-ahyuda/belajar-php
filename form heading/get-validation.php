<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM HANDLING</title>
</head>

<body>
    <?php
    $namalengkap = "";
    $kelas = '';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $namalengkap = dataType($_POST['namalengkap']);
        $kelas = dataType($_POST['kelas']);
    }
    function dataType($datakelas)
    {
        $inputdata = trim($datakelas);
        $inputdata = stripcslashes($datakelas);
        $inputdata = htmlspecialchars($datakelas);
        return $inputdata;
    }

    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div style="margin-bottom : 3px;">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="masukkan nama anda" />
        </div>
        <div style="margin-bottom : 3px;">
            <label for="kelas">Kelas</label>
            <input type="number" id="kelas" name="kelas" placeholder="masukkan kelas anda" />
        </div>
        <input type="submit" value="simpan nama">
    </form> 
    
    <?php
    echo "<br>";
    echo "nama lengkap saya" . $namalengkap;
    echo "<br>";
    echo "kelas saya" . $kelas;
    ?>



</body>

</html>