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
$namalengkap = '';
$kelas = '';

$namalengkaperror = '';
    $kelaserror = '';

    function dataType($datakelas)
    {
        $inputdata = trim($datakelas);
        $inputdata = stripslashes($datakelas);
        $inputdata = htmlspecialchars($datakelas);
        return $inputdata;
    }

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if (empty($_POST['namalengkap'])) {
            $namalengkaperror = 'nama lengkap tidak boleh kosong';
        }else{
            $namalengkap = dataType($_POST['namalengkap']) ;
        }
        if (empty($_POST['kelas'])) {
            $kelaserror = "kelas tidak boleh kosong!";
        } else {
            $kelas = dataType($_POST['kelas']);
        }
    }

?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div style="margin-bottom : 3px;">
            <label for="namalengkap">nama lengkap</label>
            <input type="text" id="namalengkap" name="namalengkap" >
            <span style="color:red; font-size:12px;"><?php echo $namalengkaperror; ?></span>
        </div>
        <div style="margin-bottom : 3px;">
            <label for="kelas">Kelas</label>
            <input type="number" id="kelas" name="kelas">
            <span style="color:red; font-size:12px;"><?php echo $kelaserror; ?></span>
        </div>
        <button type="submit">simpan</button> 
    </form>
<?php
echo "nama saya adalah " . $namalengkap;
echo "<br>";
echo "kelas saya saat ini " . $kelas;

?>
</body>

</html>