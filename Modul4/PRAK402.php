<?php
    $nilai = [
        ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
        ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
        ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
        ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        tr, td {
            padding: 10px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK402</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>NIM</td>
            <td>Nilai UTS</td>
            <td>Nilai UAS</td>
            <td>Nilai Akhir</td>
            <td>Huruf</td>
        </tr>
        <?php
        for ($i=0; $i < count($nilai); $i++) { 
            $nilai[$i]["nilaiAkhir"] = $nilai[$i]["uts"] * 0.4 + $nilai[$i]["uas"] * 0.6;
            if($nilai[$i]["nilaiAkhir"] >= 80){
                $nilai[$i]["huruf"] = "A";
            }elseif($nilai[$i]["nilaiAkhir"] > 70){
                $nilai[$i]["huruf"] = "B";
            }elseif($nilai[$i]["nilaiAkhir"] > 60){
                $nilai[$i]["huruf"] = "C";
            }elseif($nilai[$i]["nilaiAkhir"] > 50){
                $nilai[$i]["huruf"] = "D";
            }elseif($nilai[$i]["nilaiAkhir"] < 50){
                $nilai[$i]["huruf"] = "E";
            }
        }

        for ($i=0; $i < count($nilai); $i++) { 
            echo "<tr>";
            echo "<td padding = 10px>".$nilai[$i]["nama"]."</td>";
            echo "<td>".$nilai[$i]["nim"]."</td>";
            echo "<td>".$nilai[$i]["uts"]."</td>";
            echo "<td>".$nilai[$i]["uas"]."</td>";
            echo "<td>".$nilai[$i]["nilaiAkhir"]."</td>";
            echo "<td>".$nilai[$i]["huruf"]."</td>";
            echo "</tr>";
        }       
        ?>
    </table>
</body>
</html>