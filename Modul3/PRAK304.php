<?php
$bintang = NULL;
$gambar = "bintang.png";

if (isset($_POST['bintang'])) {
    $bintang = $_POST['bintang'];
}
if (isset($_POST['tambah'])){
    $bintang++;
}
if(isset($_POST['kurang'])){
    $bintang--;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK304</title>
</head>
<body>
    <?php
    for($i=0; $i<$bintang; $i++){
        echo "<img src='star.png' width=100 height=100>";
    }
    ?>

    <?php if($bintang == NULL) { ?>
        <form action="" method="POST">
            Jumlah bintang <input type ="number" name="bintang" required><br>
            <button type = "submit">Submit</button><br>
        </form>
    <?php } ?>
        
    <?php if($bintang != NULL) { ?>
        <form action="" method="POST">
            Jumlah Bintang : <?= $bintang ?><br>
            <button type = "submit" name="tambah">Tambah</button>
            <button type = "submit" name="kurang">Kurang</button>
            <input type  = "hidden" name="bintang" value="<?= $bintang; ?>">
        </form>
    <?php } ?>
</html>
</body>