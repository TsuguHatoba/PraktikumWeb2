<?php
$nilai=$_POST['nilai'];

function cek_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK204</title>
</head>
<body>
    <form action="" method="post">
        Nilai : <input type ="text" name="nilai" value="<?= cek_input($nilai) ?>"><br>
        <button type="submit" value="submit">Konversi</button>
    </form>
</body>
</html>

<?php
    $nilai=$_POST['nilai'];
    
    if ($nilai == 0){
        echo "<h2>Hasil: Nol</h2>";
    }
    else if ($nilai>=1 and $nilai<=9 ){
        echo "<h2>Hasil: Satuan</h2>";
    }
    else if ($nilai>=11 and $nilai<=19){
        echo "<h2>Hasil: Belasan</h2>"; 
    }
    else if ($nilai>=10 and $nilai<=99){
        echo "<h2>Hasil: Puluhan</h2>";
    }
    else if ($nilai>=100 and $nilai<=999){
        echo "<h2>Hasil: Ratusan</h2>";
    }
    else if ($nilai>=1000){
        echo "<h2>Hasil: Anda Menginput Melebihi Limit Bilangan</h2>";
    }
?>
