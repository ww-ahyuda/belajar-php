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
$username = '';
$password = '';

$usernameerror = '';
    $passworderror = '';

    function dataType($datakelas)
    {
        $inputdata = trim($datakelas);
        $inputdata = stripslashes($datakelas);
        $inputdata = htmlspecialchars($datakelas);
        return $inputdata;
    }

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if (empty($_POST['username'])) {
            $usernameerror = 'Harus diisikan!!!';
        }else{
            $username = dataType($_POST['username']) ;
        }
        if (empty($_POST['password'])) {
            $passworderror = "Harus diisikan!!!!";
        } else {
            $password = dataType($_POST['password']);
        }
    }

?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div style="margin-bottom : 3px;">
            <label for="username">username</label>
            <input type="text" id="username" name="username" >
            <span style="color:red; font-size:12px;"><?php echo $usernameerror; ?></span>
        </div>
        <div style="margin-bottom : 3px;">
            <label for="password">password</label>
            <input type="number" id="password" name="password">
            <span style="color:red; font-size:12px;"><?php echo $passworderror; ?></span>
        </div>
        <button type="submit">simpan</button> 
    </form>
<?php
echo "username saya " . $username;
echo "<br>";
echo "password saya " . $password;

?>
</body>

</html>