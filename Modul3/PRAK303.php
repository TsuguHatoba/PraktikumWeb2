<?php
$batasBawah = NULL;
$batasAtas = NULL;

if(isset($_POST['batasBawah'])){
    $batasBawah = $_POST['batasBawah'];
}
if(isset($_POST['batasAtas'])){
    $batasAtas = $_POST['batasAtas'];
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
    <title>PRAK303</title>
</head>
<body>
    <form action="" method="POST">
        Batas Bawah :   <input type="number" name="batasBawah"  value="<?= cek_input($batasBawah)   ?>"></br>
        Batas Atas :    <input type="number" name="batasAtas"   value="<?= cek_input($batasAtas)    ?>"></br>
        <button type="submit" name="submit">Cetak</button>
    </form>

    <?php
        if (isset($_POST['batasBawah']) && isset($_POST['batasAtas'])) {
            do {
                if (($batasBawah + 7) % 5 == 0)
                    echo "<img src='star.png' width='20px' height='20px'>";
                else    
                    echo " $batasBawah ";

                $batasBawah++;
            } while ($batasBawah <= $batasAtas);
        }
    ?>
</body>
</html>