 <?php
    $panjang = "";
    $lebar = "";
    $nilai = "";

    if (isset($_POST["submit"])) {
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $nilai = $_POST["nilai"];  
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK401</title>
</head>
<body>
    <form action="" method="post">
        Panjang: <input type="text" name="panjang" value="<?=$panjang;?>"><br>
        Lebar: <input type="text" name="lebar" value="<?=$lebar;?>"><br>
        Nilai: <input type="text" name="nilai" value="<?=$nilai;?>"><br>
        <button type="submit" name="submit">Cetak</button>
    </form>

    <?php
        if (isset($_POST["submit"])){
            $isi = explode(" ", $nilai);
            $countNilai = count($isi);
            if ($panjang * $lebar == $countNilai){
                $hitung = 0;
                for ($i=0; $i < $panjang; $i++) { 
                    for ($j=0; $j < $lebar; $j++) { 
                        $tampil[$i][$j] = $isi[$hitung];
                        $hitung++;
                    }
                }
                echo "<table border = 1>";
                for ($i=0; $i < $panjang; $i++) { 
                    echo "<tr>";
                    for ($j=0; $j < $lebar; $j++) { 
                        echo "<td>".$tampil[$i][$j]."</td>";
                    }
                    echo "</tr>";
                }
            }else {
                echo "Panjang nilai tidak sesuai dengan ukuran matriks";
            }
        }
    ?>
</body>
</html>
