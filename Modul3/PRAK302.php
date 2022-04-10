<?php
$tinggi = NULL;
$gambar = NULL;

if(isset($_POST['tinggi'])){
    $tinggi = $_POST['tinggi'];
}
if(isset($_POST['gambar'])){
    $gambar = $_POST['gambar'];
}

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK302</title>
</head>
<body>
    <form action="" method="POST">
        Tinggi :        <input type ="text" name= "tinggi" value="<?= cek_input($tinggi) ?>"><br>
        Alamat Gambar : <input type ="text" name= "gambar" value="<?= cek_input($gambar) ?>"><br>
        <button type="submit" name="submit">Cetak</button>
    </form>

    <?php
        $i=0;
        while( $i<$tinggi ){
            $j=0;
            while( $j < $i ){
                echo str_repeat('&nbsp', 5);
                $j++;
            }
            $j=0;
            while ( $j<$tinggi-$i) {
                echo "<img src='$gambar' width='20px' height='20px'>";
                $j++;
            }
            $i++;
            echo "<br>";
        } 
    ?>
</body>
</html>