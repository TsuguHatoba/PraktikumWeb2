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
        table {
            border-collapse: collapse;
        }
        td,tr{
            width: 100px;
            padding-bottom: 10px;
            padding-left: 5px;
        }
        th{
            width: 100px;
            padding-bottom: 10px;
            padding-left: 1px;
            background-color: gray;
            color: black;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK402</title>
</head>
<body>
    <table border="1">
        <?php
        echo"
        <th>Nama</th>   
        <th>NIM</th>
        <th>Nilai UTS</th>
        <th>Nilai UAS</th>
        <th>Nilai Akhir</th>
        <th>Huruf</th>";

        for ($i=0; $i < count($nilai); $i++) { 
            $nilaiAkhir = ($nilai[$i]["uts"] * 0.4) + ($nilai[$i]["uas"] * 0.6);
            $huruf = "";
            if($nilaiAkhir>=80){
                $huruf = "A";
            }else if($nilaiAkhir>=70){
                $huruf = "B";
            }else if($nilaiAkhir>=60){
                $huruf = "C";
            }else if($nilaiAkhir>=50){
                $huruf = "D";
            }else{
                $huruf = "E";
            }

            echo"
            <tr>
                <td>".$nilai[$i]["nama"]."</td>
                <td>".$nilai[$i]["nim"]."</td>
                <td>".$nilai[$i]["uts"]."</td>
                <td>".$nilai[$i]["uas"]."</td>
                <td>".$nilaiAkhir."</td>
                <td>".$huruf."</td>
            </tr>";   
        }
        ?>
    </table>
</body>
</html>
