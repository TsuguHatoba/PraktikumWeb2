<?php

$nama1=$_POST["nama1"];
$nama2=$_POST["nama2"];
$nama3=$_POST["nama3"];
function cek_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="i-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK201</title>
</head>
<body>
    <form action="" method="POST">
        Nama 1 : <input type ="text" name= "nama1" value="<?= cek_input($nama1) ?>"><br>
        Nama 2 : <input type ="text" name= "nama2" value="<?= cek_input($nama2) ?>"><br>
        Nama 3 : <input type ="text" name= "nama3" value="<?= cek_input($nama3) ?>"><br>
        <button type="submit" name="submit">Urutkan</button>
    </form>
</body>
</html>

<?php
if (isset($_POST["submit"])) {
    $nama1 = $_POST["nama1"];
    $nama2 = $_POST["nama2"];
    $nama3 = $_POST["nama3"];

    if ($nama1 < $nama2 and $nama1 < $nama3) {
        if ($nama2 < $nama3) {
            echo "$nama1 <br> $nama2 <br> $nama3";
        }
        else {
            echo "$nama1 <br> $nama3 <br> $nama2";
        }
    }
    elseif ($nama2 < $nama1 and $nama2 < $nama3) {
        if ($nama1 < $nama3) {
            echo "$nama2 <br> $nama1 <br> $nama3";
        }
        else {
            echo "$nama2 <br> $nama3 <br> $nama1";
        }
    }
    elseif($nama3 < $nama2 and $nama3 < $nama2){
        if ($nama1 < $nama2) {
            echo "$nama3 <br> $nama1 <br> $nama2";
        }
        else {
            echo "$nama3 <br> $nama2 <br> $nama1";
        }
    }
}
?>   
