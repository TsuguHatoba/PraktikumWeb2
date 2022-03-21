<?php
$nilai = $_POST["nilai"];

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
    <title>PRAK203</title>

</head>
<body>
    <form action="" method="POST">
        Nilai: <input type="text" name="nilai" class="form-control" value="<?= cek_input($nilai) ?>"><br><br>

        <label for="suhuAwal">Dari : <br></label>
        <input type="radio" name="suhuAwal" value="Celcius"     <?php if(isset($_POST["suhuAwal"]) and $_POST["suhuAwal"] == "Celcius")     echo "checked"; ?>> Celcius<br>
        <input type="radio" name="suhuAwal" value="Fahrenheit"  <?php if(isset($_POST["suhuAwal"]) and $_POST["suhuAwal"] == "Fahrenheit")  echo "checked"; ?>> Fahrenheit<br>
        <input type="radio" name="suhuAwal" value="Reamur"      <?php if(isset($_POST["suhuAwal"]) and $_POST["suhuAwal"] == "Reamur")      echo "checked"; ?>> Reamur<br>
        <input type="radio" name="suhuAwal" value="Kelvin"      <?php if(isset($_POST["suhuAwal"]) and $_POST["suhuAwal"] == "Kelvin")      echo "checked"; ?>> Kelvin<br><br>

        <label for="suhuAkhir">Ke : <br></label>
        <input type="radio" name="suhuAkhir" value="Celcius"    <?php if(isset($_POST["suhuAkhir"]) and $_POST["suhuAkhir"] == "Celcius")   echo "checked"; ?>> Celcius<br>
        <input type="radio" name="suhuAkhir" value="Fahrenheit" <?php if(isset($_POST["suhuAkhir"]) and $_POST["suhuAkhir"] == "Fahrenheit")echo "checked"; ?>> Fahrenheit<br>
        <input type="radio" name="suhuAkhir" value="Reamur"     <?php if(isset($_POST["suhuAkhir"]) and $_POST["suhuAkhir"] == "Reamur")    echo "checked"; ?>> Reamur<br>
        <input type="radio" name="suhuAkhir" value="Kelvin"     <?php if(isset($_POST["suhuAkhir"]) and $_POST["suhuAkhir"] == "Kelvin")    echo "checked"; ?>> Kelvin<br><br>
        <button type="submit">Konversi</button><br>
    </form>
</body>
</html>

<?php
    $hasil = "";
    $nilai = $_POST["nilai"];
    $suhuAwal = $_POST["suhuAwal"];
    $suhuAkhir = $_POST["suhuAkhir"];

    if($suhuAwal=="Celcius" and $suhuAkhir == "Fahrenheit"){
        $hasil = 9 / 5 * $nilai + 32;
        echo "<h2>Hasil Konversi: $hasil °F</h2>";
    }else if($suhuAwal == "Celcius" and $suhuAkhir == "Reamur"){
        $hasil = 4 / 5 * $nilai;
        echo "<h2>Hasil Konversi: $hasil °R</h2>";
    }else if($suhuAwal == "Celcius" and $suhuAkhir == "Kelvin"){
        $hasil = $nilai + 273;
        echo "<h2>Hasil Konversi: $hasil °K</h2>";
    }else if($suhuAwal == "Fahrenheit" and $suhuAkhir == "Celcius"){
        $hasil = 5 / 9 * ($nilai - 32);
        echo "<h2>Hasil Konversi: $hasil °C</h2>";
    }else if($suhuAwal == "Fahrenheit" and $suhuAkhir == "Reamur"){
        $hasil = 4/9*($nilai-32);
        echo "<h2>Hasil Konversi: $hasil °R</h2>";
    }else if($suhuAwal == "Fahrenheit" and $suhuAkhir == "Kelvin"){
        $hasil = 5/9*($nilai-32)+273;
        echo "<h2>Hasil Konversi: $hasil °K</h2>";
    }else if($suhuAwal == "Reamur" and $suhuAkhir == "Celcius"){
        $hasil = 5/4*$nilai;
        echo "<h2>Hasil Konversi: $hasil °C</h2>";
    }else if($suhuAwal == "Reamur" and $suhuAkhir == "Fahrenheit"){
        $hasil = 9/4*$nilai+32;
        echo "<h2>Hasil Konversi: $hasil °F</h2>";
    }else if($suhuAwal == "Reamur" and $suhuAkhir == "Kelvin"){
        $hasil = 5/4*$nilai+273;
        echo "<h2>Hasil Konversi: $hasil °K</h2>";
    }else if($suhuAwal == "Kelvin" and $suhuAkhir == "Celcius"){
        $hasil = $nilai - 273;
        echo "<h2>Hasil Konversi: $hasil °C</h2>";
    }else if($suhuAwal == "Kelvin" and $suhuAkhir == "Fahrenheit"){
        $hasil = 4/5*($nilai-273);
        echo "<h2>Hasil Konversi: $hasil °F</h2>";
    }else if($suhuAwal == "Kelvin" and $suhuAkhir == "Reamur"){
        $hasil = 9/5*($nilai - 273)+32;
        echo "<h2>Hasil Konversi: $hasil °R</h2>";
    }else{
        echo "<h2>$nilai</h2>";
    }     
?>
