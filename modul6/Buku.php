<?php
require 'Model.php';
require 'Koneksi.php';
include 'index.php';

CekUserSession($_SESSION['NomorMember']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head>

<body>
    
    <div class="container" style="width:fit-content">
        <a href='FormBuku.php?form=tambah'><button class="btn btn-success">Tambah Data</button></a>

            <table class="table table-bordered table-striped table-danger">
                <tr>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            <?php foreach (GetDataBuku($connection) as $row) : ?>

            <tr>
                <td><?= $row->judul_buku; ?></td>
                <td><?= $row->penulis; ?></td>
                <td><?= $row->penerbit; ?></td>
                <td><?= $row->tahun_terbit; ?></td>
                <td>
                    <a href='FormBuku.php?id_buku=<?= $row->id_buku ?>&form=update'><button class="btn btn-light">Edit</button></a>
                    <a onclick="return confirm('Hapus Data?')" href='FormBuku.php?id_buku=<?= $row->id_buku ?>&form=delete'><button class="btn btn-dark">Delete</button></a>
                </td>
            </tr>
            </tr>
        <?php endforeach; ?>
    </div>
</body>
</html>