<?php
    $nilai =
    [
        [
            "nama"=> "Ridho", "mataKuliah"=>
            [
                "Pemrograman I", "Praktikum Pemrograman I", "Pengantar Lingkungan Lahan Basah", "Arsitektur Komputer"
            ],"sks"=>[2, 1, 2, 3]
        ],

        [
            "nama"=> "Ratna", "mataKuliah"=>
            [
                "Basis Data I", "Praktikum Basis Data I", "Kalkulus"
            ],"sks"=>[2, 1, 3]
        ],

        [
            "nama"=> "Tono", "mataKuliah"=>
            [
                "Rekayasa Perangkat Lunak", "Analisis dan Perancangan Sistem", "Komputasi Awan", "Kecerdasan Bisnis"
            ]
            ,"sks"=>[3, 3, 3, 3]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK403</title>
    <style>
        table, td, th {  
            border: 1px solid black;
            text-align: left;
            padding-right: 10px;
        }

        table {
            border-collapse: collapse;
        }

        th,td{
            padding-bottom: 10px;
            padding-left: 5px;
        }

        th{
            background-color: gray;
        }
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah Diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
        <?php

            for($totalSks=0; $totalSks<count($nilai);$totalSks++){
                $nilai[$totalSks]["Total SKS"] = array_sum($nilai[$totalSks]["sks"]);
            }


            for($i=0; $i <count($nilai); $i++){
                for($j=0; $j<count($nilai[$i]["mataKuliah"]); $j++){
                    echo "<tr>";
                    if($j==0){
                        echo "
                        <td>".$i+1 ."</td>
                        <td>".$nilai[$i]["nama"]."</td>
                        <td>".$nilai[$i]["mataKuliah"][$j]."</td>
                        <td>".$nilai[$i]["sks"][$j]."</td>
                        <td>".$nilai[$i]["Total SKS"]."</td>
                        ";
                        
                        if($nilai[$i]["Total SKS"]>6){
                            $nilai[$i]["Keterangan"] = "Tidak Revisi";
                            echo "<td style='background-color:green;'>".$nilai[$i]["Keterangan"]."</td>";
                        }else{
                            $nilai[$i]["Keterangan"] = "Revisi KRS";
                            echo "<td style='background-color:red;'>".$nilai[$i]["Keterangan"]."</td>";
                        }

                    }else{
                        echo "
                        <td></td>
                        <td></td>
                        <td>".$nilai[$i]["mataKuliah"][$j]."</td>
                        <td>".$nilai[$i]["sks"][$j]."</td>
                        <td></td>
                        <td></td>
                        ";
                    }
                }
           }
        ?>
    </table>
</body>
</html>
