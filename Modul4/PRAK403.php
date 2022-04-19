<?php
    $nilai = [
        ["no" => 1, "nama" => "Ridho", 
        "mk" => [
            ["mataKuliah" =>"Pemrograman I", "sks" => 2], 
            ["mataKuliah" => "Praktikum Pemrograman I", "sks" => 1],
            ["mataKuliah" => "Pengantar Lingkungan Lahan Basah", "sks" => 2], 
            ["mataKuliah" => "Arsitektur Komputer", "sks" => 3]
        ]
        ],

        ["no" => 2, "nama" => "Ratna", 
        "mk" => [
            ["mataKuliah" =>"Basis Data I", "sks" => 2], 
            ["mataKuliah" => "Praktikum Basis Data I", "sks" => 1],
            ["mataKuliah" => "Kalkulus", "sks" => 3]
        ]
        ],

        ["no" => 3, "nama" => "Tono", 
        "mk" => [
            ["mataKuliah" => "Rekayasa Perangkat Lunak", "sks" => 3], 
            ["mataKuliah" => "Analisis dan Perancangan Sistem", "sks" => 3],
            ["mataKuliah" => "Komputasi Awan", "sks" => 3], 
            ["mataKuliah" => "Kecerdasan Bisnis", "sks" => 3]
        ]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table, tr, td, th {
            border: 1px solid black;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3</title>
</head>
<body>
    <table>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Mata Kuliah diambil</td>
            <td>SKS</td>
            <td>Total SKS</td>
            <td>Keterangan</td>
        </tr>
        <?php
            for ($i=0; $i < count($nilai); $i++) {
                $jumlah = 0;
                for ($j=0; $j < count($nilai[$i]["mk"]); $j++) { 
                    $jumlah += $nilai[$i]["mk"][$j]["sks"];
                }
                $nilai[$i]["jumlah"] = $jumlah;
                if ($nilai[$i]["jumlah"] <= 6) {
                    $nilai[$i]["keterangan"] = "<div style=background-color:#ff4f4f>Revisi KRS</div>";
                } else {
                    $nilai[$i]["keterangan"] = "<div style=background-color:#7bfc44>Tidak Revisi";
                }
            }

            for ($i=0; $i < count($nilai); $i++) {
                for ($j=0; $j < count($nilai[$i]["mk"]); $j++) { 
                    echo "<tr>";
                    if ($j == 0) {
                        echo "<td>".$nilai[$i]["no"]."</td>";
                        echo "<td>".$nilai[$i]["nama"]."</td>";
                        echo "<td>".$nilai[$i]["mk"][$j]["mataKuliah"]."</td>";
                        echo "<td>".$nilai[$i]["mk"][$j]["sks"]."</td>";
                        echo "<td>".$nilai[$i]["jumlah"]."</td>";
                        echo "<td>".$nilai[$i]["keterangan"]."</td>";
                    }else {
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td>".$nilai[$i]["mk"][$j]["mataKuliah"]."</td>";
                        echo "<td>".$nilai[$i]["mk"][$j]["sks"]."</td>";
                        echo "<td></td>";
                        echo "<td></td>";
                    }
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>
</html>