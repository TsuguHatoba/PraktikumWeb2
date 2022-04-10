<?php
$peserta = NULL;

if (isset($_POST["peserta"])){
    $peserta = $_POST["peserta"];
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
    <title>PRAK301</title>
</head>
<body>
    <form action="" method="POST">
        Jumlah Peserta :<input type ="text" name= "peserta" value="<?= cek_input($peserta) ?>"><br>
        <button type="submit" name="submit">Cetak</button>
    </form>

    <?php
        $i = 1;
        while ($i<=$peserta) {
        if ($i%2==0){
            echo "<h2><font color=green>Peserta ke-$i<br></h2>";
        }
        else {
            echo "<h2><font color=red>Peserta ke-$i<br></h2>";
        }
        $i++;
        }
    ?>    
</body>
</html>

